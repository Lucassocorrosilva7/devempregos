<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        //
        VerifyEmail::toMailUsing(function($notifiable, $url) {
            return (new MailMessage)
            ->subject('Verificar Conta')
            ->line('Sua conta está quase pronta, você só precisa clicar no link abaixo')
            ->action('Confirmar Conta', $url)
            ->line('Se você não criou esta conta, pode ignorar esta mensagem');
        });
    }
}
