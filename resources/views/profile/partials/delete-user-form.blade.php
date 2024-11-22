<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium">Delete Account</h2>
        <p class="mt-1 text-sm text-gray-400">Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.</p>
    </header>

    <button class="btn btn-error" onclick="modal_1.showModal()">Delete Account</button>

    <dialog id="modal_1" class="modal">
        <div class="modal-box">
            <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
                @csrf
                @method('delete')

                <h2 class="text-lg font-medium text-gray-100">
                    Are you sure you want to delete your account?
                </h2>

                <p class="mt-1 text-sm text-gray-400">
                    Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.
                </p>

                <label class="mt-6 form-control w-full">
                    <div class="label">
                        <span class="label-text">Password</span>

                    </div>
                    <input name="password" type="password" placeholder="Password"
                        class="input input-bordered @error('password') input-error @enderror w-full" required
                        autocomplete="new-password" />
                    <div class="label">
                        @error('password')
                        <span class="label-text-alt text-error">{{ $message }}</span>
                        @enderror
                    </div>
                </label>

                <div class="mt-6 flex justify-end items-center gap-2">
                    <button type="button" class="btn btn-neutral" onclick="modal_1.close()">Cancel</button>
                    <input type="submit" class="btn btn-error" value="Delete Account">
                </div>
            </form>
        </div>
    </dialog>
</section>