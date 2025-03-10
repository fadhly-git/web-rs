<?php

namespace App\Providers\Filament;

use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\AuthenticateSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Pages;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Widgets;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use App\Filament\Widgets\AgendaOverview;
use Filament\Enums\ThemeMode;
use Filament\Navigation\NavigationGroup;
use Filament\Support\Assets\Theme;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->login()
            ->colors([
                'danger' => Color::Rose,
                'gray' => Color::Gray,
                'info' => Color::Blue,
                'primary' => Color::Indigo,
                'success' => Color::Emerald,
                'warning' => Color::Orange,
            ])
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\\Filament\\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\\Filament\\Pages')
            ->pages([
                Pages\Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\\Filament\\Widgets')
            ->widgets([
                Widgets\AccountWidget::class,
                AgendaOverview::class,
            ])
            ->navigationGroups([
                NavigationGroup::make()
                    ->label('Dashboard')
                    ->icon('heroicon-o-home'),
                NavigationGroup::make()
                    ->label('Manajemen Konten')
                    ->icon('heroicon-o-presentation-chart-bar'),
                NavigationGroup::make()
                    ->label('Pengaturan Tampilan')
                    ->icon('heroicon-o-device-phone-mobile'),
                NavigationGroup::make()
                    ->label('Manajemen Pengguna')
                    ->icon('heroicon-o-user-group'),
                NavigationGroup::make()
                    ->label('Konfigurasi Sistem')
                    ->icon('heroicon-o-command-line'),
                NavigationGroup::make()
                    ->label('Jadwal Dokter')
                    ->icon('heroicon-o-calendar-days'),
                NavigationGroup::make()
                    ->label('Sumber Daya')
                    ->icon('heroicon-o-bolt'),
                
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ])->sidebarCollapsibleOnDesktop()
            // ->brandLogo(asset('imgs/logo.png'))
            // ->brandName('Filament')
            ->favicon(asset('imgs/logo.png'))
            ->defaultThemeMode(ThemeMode::Light);
    }
}
