# Install package

```bash
composer require uccello/impersonate
```

# Add Blade sections

## Add button in User detail view
Create a file located at `resources/views/uccello/modules/user/detail/main.blade.php` and add the following code:

```html
@extends('uccello::modules.default.detail.main')

@section('custom-top-action-buttons')
    @include('impersonate::button')
@append
```

## Add message bar
Add the following code into the file located at `resources/layouts/uccello.blade.php`:

```html
@section('after-navbar-header')
    @include('impersonate::message')
@append
```
