<x-master>
    <x-slot name="adminCss">
        @include('admin.styles.admin_style')
    </x-slot>
    @include('admin.inc._sidebar')

    @include('admin.banners.main')

    <x-slot name="adminScripts">
        @include('admin.scripts.admin_scripts')
    </x-slot>
</x-master>
