<div>
    <!-- Knowing is not enough; we must apply. Being willing is not enough; we must do. - Leonardo da Vinci -->
    @if (session()->has('success'))
        <div class="w-full mt-8 flex items-center justify-center">
            <div class="alert w-3/4 justify-center flex items-center md:h-12 h-6 rounded bg-green-300 md:text-xl alert-success" x-data="{ isVisible: true }" x-init="setTimeout(() => { isVisible = false }, 2000)" x-show="isVisible"">
                {{ session('success') }}
            </div>
        </div>
    @endif
</div>