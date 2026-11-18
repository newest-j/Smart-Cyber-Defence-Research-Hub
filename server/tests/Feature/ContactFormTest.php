<?php

use App\Mail\ContactMessageMail;
use Illuminate\Support\Facades\Mail;

it('validates and sends contact messages', function () {
    Mail::fake();

    $response = $this->postJson('/api/contact', [
        'name' => 'Test User',
        'email' => 'test@example.com',
        'subject' => 'Partnership Inquiry',
        'message' => 'Please get in touch with us about collaboration.',
    ]);

    $response->assertOk()->assertJson([
        'message' => 'Your message has been sent successfully.',
    ]);

    Mail::assertSent(ContactMessageMail::class, function (ContactMessageMail $mail) {
        return $mail->hasTo('info@smartcyberdefencehub.org')
            && $mail->contact['email'] === 'test@example.com'
            && $mail->contact['name'] === 'Test User';
    });
});

it('rejects invalid contact messages', function () {
    $response = $this->postJson('/api/contact', [
        'name' => '',
        'email' => 'not-an-email',
        'subject' => '',
        'message' => '',
    ]);

    $response->assertStatus(422)
        ->assertJsonValidationErrors(['name', 'email', 'subject', 'message']);
});
