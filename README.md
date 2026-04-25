# Lyre School

`lyre/school` provides educational domain workflows for assessments and tasks.

## Install
```bash
composer require lyre/school
```

Publish migrations and migrate:
```bash
php artisan vendor:publish --provider="Lyre\School\Providers\LyreSchoolServiceProvider"
php artisan migrate
```

## API surfaces
- `assessments`, `assessmentattempts`, `assessmenttasks`, `tasks`, `taskanswers`, `selectedtaskanswers`
- custom routes:
  - `GET /api/assessments/{assessment}/publish`
  - `GET /api/assessmentattempts/{assessmentattempt}/submit`

## Filament
```php
use Lyre\School\Filament\Plugins\LyreSchoolFilamentPlugin;

$panel->plugins([
    LyreSchoolFilamentPlugin::make(),
]);
```
