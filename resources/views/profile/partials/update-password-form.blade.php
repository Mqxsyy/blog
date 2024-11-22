<section>
    <header>
        <h2 class="text-lg font-medium">Update Password</h2>
        <p class="mt-1 text-sm text-gray-400">Ensure your account is using a long, random password to stay secure.</p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-2">
        @csrf
        @method('put')

        <label class="form-control w-full">
            <div class="label">
                <span class="label-text">Current Password</span>
            </div>
            <input name="current_password" type="password" placeholder="Current Password"
                class="input input-bordered @error('current_password') input-error @enderror w-full" required
                autocomplete="current-password" />
            <div class="label">
                @error('current_password')
                <span class="label-text-alt text-error">{{ $message }}</span>
                @enderror
            </div>
        </label>

        <label class="form-control w-full">
            <div class="label">
                <span class="label-text">New Password</span>
            </div>
            <input name="password" type="password" placeholder="New Password"
                class="input input-bordered @error('password') input-error @enderror w-full" required
                autocomplete="new-password" />
            <div class="label">
                @error('password')
                <span class="label-text-alt text-error">{{ $message }}</span>
                @enderror
            </div>
        </label>

        <label class="form-control w-full">
            <div class="label">
                <span class="label-text">Confirm New Password</span>
            </div>
            <input name="password_confirmation" type="password" placeholder="Confirm New Password"
                class="input input-bordered @error('password_confirmation') input-error @enderror w-full" required
                autocomplete="new-password" />
            <div class="label">
                @error('password_confirmation')
                <span class="label-text-alt text-error">{{ $message }}</span>
                @enderror
            </div>
        </label>

        <div class="flex items-center gap-4">
            <input type="submit" class="btn btn-primary" value="Update Password">

            @if (session('status') === 'password-updated')
            <p class="text-sm text-gray-400">Saved.</p>
            @endif
        </div>
    </form>
</section>