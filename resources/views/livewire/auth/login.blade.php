<div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="w-full max-w-md p-6 bg-white rounded-lg shadow-md">
        <h2 class="text-xl font-semibold text-center">تسجيل الدخول</h2>

        <form wire:submit.prevent="login" class="mt-4">
            <div class="mb-4">
                <label class="block text-gray-700">البريد الإلكتروني</label>
                <input type="email" wire:model.defer="email" class="w-full p-2 border rounded-lg">
                @error('email') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            <div class="mb-4">
                <label class="block text-gray-700">كلمة المرور</label>
                <input type="password" wire:model.defer="password" class="w-full p-2 border rounded-lg">
                @error('password') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            <button type="submit" class="w-full p-2 text-white bg-blue-500 rounded-lg hover:bg-blue-600">
                تسجيل الدخول
            </button>
        </form>
    </div>
</div>
