<div>
    <div class="bg-white py-8 px-8 rounded-b border-t-2 border-brand-gray shadow">
        <h3 class="font-bold text-brand-primary-400 text-xl pb-2 mb-4 border-b border-brand-gray capitalize">
            Logo
        </h3>
        @if ($updated)
            <div class="bg-green-600 text-white py-4 px-8 rounded border border-green-800 my-4 ">
                Form updated successfully
            </div>
        @endif
        <p class="text-brand-primary-300 mb-4 text-sm">
            The logo will be used on your emails, the thank-you page branding, and custom error pages.
        </p>
        <!-- Logo -->
        <div class="mb-4 flex items-center gap-2">
            @php
                if (isset($email_logo) && gettype($email_logo) == 'object' && in_array($email_logo->getMimeType(), ['image/jpeg', 'image/png', 'image/jpg'])) {
                    $email_logo = $email_logo?->temporaryUrl();
                }
            @endphp
            <img src="{{ $email_logo }}" alt="" style="max-height: 150px;width: 100%;object-fit: cover;">
        </div>
        <div class="mb-4 flex items-center gap-2">
            <label for="name" class="text-brand-primary-400  text-sm font-bold leading-8">
                <svg class="fill-current w-10 h-10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50">
                    <path
                        d="M15.38,0 L34.62,0 C39.97,0 41.91,0.56 43.86,1.6 C45.7948257,2.62319527 47.3768047,4.20517426 48.4,6.14 C49.44,8.09 50,10.04 50,15.38 L50,34.62 C50,39.97 49.44,41.91 48.4,43.86 C47.3768047,45.7948257 45.7948257,47.3768047 43.86,48.4 C41.91,49.44 39.96,50 34.62,50 L15.38,50 C10.03,50 8.09,49.44 6.14,48.4 C4.20517426,47.3768047 2.62319527,45.7948257 1.6,43.86 C0.56,41.91 0,39.96 0,34.62 L0,15.38 C0,10.03 0.56,8.09 1.6,6.14 C2.62319527,4.20517426 4.20517426,2.62319527 6.14,1.6 C8.09,0.56 10.04,0 15.38,0 Z M12.58,21 C11.56,21 11.02,21.14 10.53,21.4 C10.05,21.66 9.66,22.05 9.4,22.53 C9.14,23.03 9,23.56 9,24.57 L9,25.43 C9,26.43 9.14,26.98 9.4,27.47 C9.66,27.95 10.05,28.34 10.53,28.6 C11.03,28.86 11.56,29 12.57,29 L29.43,29 C30.43,29 30.98,28.86 31.47,28.6 C31.95,28.34 32.34,27.95 32.6,27.47 C32.86,26.97 33,26.44 33,25.43 L33,24.57 C33,23.57 32.86,23.02 32.6,22.53 C32.344478,22.0490526 31.9509474,21.655522 31.47,21.4 C30.8374445,21.0882953 30.1334284,20.9502529 29.43,21 L12.57,21 L12.58,21 Z M12.58,23 L29.43,23 C30.07,23 30.31,23.05 30.53,23.16 C30.66,23.24 30.76,23.34 30.83,23.48 C30.95,23.69 31,23.93 31,24.58 L31,25.43 C31,26.07 30.95,26.31 30.84,26.53 C30.7666093,26.6604396 30.6548984,26.7651686 30.52,26.83 C30.31,26.95 30.07,27 29.42,27 L12.58,27 C11.94,27 11.7,26.95 11.48,26.84 C11.3495604,26.7666093 11.2448314,26.6548984 11.18,26.52 C11.06,26.31 11.01,26.07 11.01,25.42 L11.01,24.57 C11.01,23.93 11.06,23.69 11.17,23.47 C11.2433907,23.3395604 11.3551016,23.2348314 11.49,23.17 C11.7,23.05 11.94,23 12.59,23 L12.58,23 Z M12.58,9 C11.56,9 11.02,9.14 10.53,9.4 C10.05,9.66 9.66,10.05 9.4,10.53 C9.14,11.03 9,11.56 9,12.57 L9,13.43 C9,14.43 9.14,14.98 9.4,15.47 C9.66,15.95 10.05,16.34 10.53,16.6 C11.03,16.86 11.56,17 12.57,17 L37.43,17 C38.43,17 38.98,16.86 39.47,16.6 C39.95,16.34 40.34,15.95 40.6,15.47 C40.86,14.97 41,14.44 41,13.43 L41,12.57 C41,11.57 40.86,11.02 40.6,10.53 C40.344478,10.0490526 39.9509474,9.65552203 39.47,9.4 C38.8374445,9.0882953 38.1334284,8.95025294 37.43,9 L12.57,9 L12.58,9 Z M12.58,11 L37.43,11 C38.07,11 38.31,11.05 38.53,11.16 C38.66,11.24 38.76,11.34 38.83,11.48 C38.95,11.69 39,11.93 39,12.58 L39,13.43 C39,14.07 38.95,14.31 38.84,14.53 C38.7666093,14.6604396 38.6548984,14.7651686 38.52,14.83 C38.31,14.95 38.07,15 37.42,15 L12.58,15 C11.94,15 11.7,14.95 11.48,14.84 C11.3495604,14.7666093 11.2448314,14.6548984 11.18,14.52 C11.06,14.31 11.01,14.07 11.01,13.42 L11.01,12.57 C11.01,11.93 11.06,11.69 11.17,11.47 C11.2433907,11.3395604 11.3551016,11.2348314 11.49,11.17 C11.7,11.05 11.94,11 12.59,11 L12.58,11 Z M12.58,33 C11.56,33 11.02,33.14 10.53,33.4 C10.05,33.66 9.66,34.05 9.4,34.53 C9.14,35.03 9,35.56 9,36.57 L9,37.43 C9,38.43 9.14,38.98 9.4,39.47 C9.66,39.95 10.05,40.34 10.53,40.6 C11.03,40.86 11.56,41 12.57,41 L17.43,41 C18.43,41 18.98,40.86 19.47,40.6 C19.95,40.34 20.34,39.95 20.6,39.47 C20.86,38.97 21,38.44 21,37.43 L21,36.57 C21,35.57 20.86,35.02 20.6,34.53 C20.344478,34.0490526 19.9509474,33.655522 19.47,33.4 C18.8374445,33.0882953 18.1334284,32.9502529 17.43,33 L12.57,33 L12.58,33 Z"
                        id="Shape"></path>
                </svg>
            </label>
            <input class="" type="file" name="name" wire:model="email_logo" />
        </div>
        <div class="mb-4 flex items-center gap-2">
            @error('email_logo')
                <span class="text-red-500 text-xs mt-2">
                    {{ $message }}
                </span>
            @enderror
        </div>
        <!-- button -->
        <button wire:click="update" wire:loading.attr='disabled'
            class="block bg-brand-primary-500 hover:bg-brand-primary-400 text-white text-center font-bold p-4 uppercase w-52 ml-auto rounded-md">
            UPDATE LOGO
        </button>
    </div>
</div>
