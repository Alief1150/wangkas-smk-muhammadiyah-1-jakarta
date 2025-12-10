<?php

namespace App\Livewire\PaymentCategories;

use App\Models\PaymentCategory;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

#[Title('Kategori Program')]
class PaymentCategoryIndex extends Component
{
    use WithPagination;

    public $name;
    public $additional_fee;
    public $selectedId;
    public $isEditMode = false;

    protected $rules = [
        'name' => 'required|string|max:255',
        'additional_fee' => 'required|numeric',
    ];

    public function render()
    {
        return view('livewire.payment-categories.payment-category-index', [
            'categories' => PaymentCategory::latest()->paginate(10)
        ]);
    }

    public function create()
    {
        $this->reset(['name', 'additional_fee', 'selectedId', 'isEditMode']);
        $this->dispatch('open-modal');
    }

    public function store()
    {
        $this->validate();
        PaymentCategory::create([
            'name' => $this->name,
            'additional_fee' => $this->additional_fee,
        ]);
        $this->dispatch('close-modal');
        $this->dispatch('success', message: 'Kategori berhasil ditambahkan!');
        $this->reset(['name', 'additional_fee']);
    }

    public function edit($id)
    {
        $category = PaymentCategory::find($id);
        $this->selectedId = $id;
        $this->name = $category->name;
        $this->additional_fee = $category->additional_fee;
        $this->isEditMode = true;
        $this->dispatch('open-modal');
    }

    public function update()
    {
        $this->validate();
        if ($this->selectedId) {
            $category = PaymentCategory::find($this->selectedId);
            $category->update([
                'name' => $this->name,
                'additional_fee' => $this->additional_fee,
            ]);
            $this->dispatch('close-modal');
            $this->dispatch('success', message: 'Kategori berhasil diupdate!');
            $this->reset(['name', 'additional_fee', 'selectedId', 'isEditMode']);
        }
    }

    public function delete($id)
    {
        $category = PaymentCategory::find($id);
        if ($category) $category->delete();
        $this->dispatch('success', message: 'Kategori berhasil dihapus!');
    }
}