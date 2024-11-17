app_name := env_var('APP_NAME')
set dotenv-load := true

_default:
  just --list

[group('laravel')]
start:
  php artisan serve

[group('laravel')]
generate-model model:
  php artisan make:model {{ model }} -m

[group('filament')]
filament-resource-generate resource:
  php artisan make:filament-resource {{ resource }} --generate
[group('filament')]
filament-resource-view resource:
  php artisan make:filament-resource {{ resource }} --view
[group('filament')]
filament-resource-only resource:
  php artisan make:filament-resource {{ resource }}
[group('filament')]
filament-relation-manager resource-class relationship attribute:
  php artisan make:filament-relation-manager {{ resource-class }} {{ relationship }} {{ attribute }}
[group('filament')]
filament-widget-resource overview resource:
  php artisan make:filament-widget {{overview}} --resource={{resource}}
[group('filament')]
filament-widget-table name:
  php artisan make:filament-widget {{name}} --table


[group('livewire')]
[group('view')]
livewire-create-component component-name:
  php artisan make:livewire {{component-name}}
[group('livewire')]
[group('view')]
livewire-create-default-layout:
  php artisan livewire:layout
[group('laravel')]
[group('view')]
laravel-create-component-view-only component-name:
  php artisan make:component {{component-name}} --view

[group('vite')]
vite-dev:
  npm run dev
[group('vite')]
vite-build:
  npm run build
[group('etc')]
show-app:
  echo "Your application name is {{ app_name }}"