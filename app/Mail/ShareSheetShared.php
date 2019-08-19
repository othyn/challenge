<?php

namespace App\Mail;

use App\ShareSheet;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ShareSheetShared extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * The share sheet instance.
     *
     * @var ShareSheet
     */
    protected $shareSheet;

    /**
     * Create a new message instance.
     *
     * @param \App\ShareSheet $shareSheet
     *
     * @return void
     */
    public function __construct(ShareSheet $shareSheet)
    {
        $this->shareSheet = $shareSheet;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('share@example.com')
            ->markdown('share.email')
            ->with([
                'customer_name' => $this->shareSheet->customer_name,
                'friend_name' => $this->shareSheet->friend_name,
            ]);
    }
}
