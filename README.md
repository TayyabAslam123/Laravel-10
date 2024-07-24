
## Some new concepts learnt in this repo

1) New way to add js.

In child file use 
@push('scripts')
@endpush

and in parent file use 
@stack('scripts')

2) Invokable controller
In Laravel, invokable controllers are single-action controllers that contain a single __invoke method. This approach is useful for controllers that handle a single action, providing a clean and straightforward way to define and manage routes.

php artisan make:controller MyInvokableController --invokable

3) All Relations: