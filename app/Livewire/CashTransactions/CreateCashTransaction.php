<?php

namespace App\Livewire\CashTransactions;

use App\Livewire\Forms\StoreCashTransactionForm;
use App\Models\Student;
use App\Models\PaymentCategory; // Model baru
use Illuminate\Contracts\View\View;
use Livewire\Component;

class CreateCashTransaction extends Component
{
    public StoreCashTransactionForm $form;

    public $baseTuitionFee = 0; // Harga Jurusan
    public $additionalFee = 0;  // Harga Program
    public $selectedProgramId = null;

    // FUNGSI 1: SAAT SISWA DIPILIH
    public function cekHarga($studentId)
    {
        if (is_array($studentId)) $studentId = reset($studentId);
        
        $this->form->student_ids = [$studentId];
        $student = Student::with('schoolMajor')->find($studentId);

        if ($student && $student->schoolMajor) {
            $this->baseTuitionFee = (int) ($student->schoolMajor->tuition_fee ?? 0);
            $this->calculateTotal();
            $this->form->note = "✅ Jurusan: " . $student->schoolMajor->name;
        } else {
            $this->baseTuitionFee = 0;
            $this->calculateTotal();
            $this->form->note = "❌ Siswa belum punya jurusan.";
        }
    }

    // FUNGSI 2: SAAT PROGRAM DIPILIH
    public function updatedSelectedProgramId($value)
    {
        if ($value) {
            $program = PaymentCategory::find($value);
            $this->additionalFee = (int) ($program->additional_fee ?? 0);
        } else {
            $this->additionalFee = 0;
        }
        $this->calculateTotal();
    }

    // FUNGSI 3: HITUNG TOTAL
    public function calculateTotal()
    {
        $this->form->amount = $this->baseTuitionFee + $this->additionalFee;
    }

    public function render(): View
    {
        return view('livewire.cash-transactions.create-cash-transaction', [
            'students' => Student::select('id', 'name', 'identification_number')->orderBy('name')->get(),
            'programs' => PaymentCategory::all() // Kirim data program
        ]);
    }

    public function save(): void
    {
        $this->form->store();
        $this->dispatch('close-modal');
        $this->dispatch('success', message: 'Transaksi berhasil!');
        $this->dispatch('cash-transaction-created')->to(CashTransactionCurrentWeekTable::class);
    }
}