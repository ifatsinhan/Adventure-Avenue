<?php
    include_once('partials/__dbconnect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="output.css">
</head>
<body>
<main
    class="flex items-center justify-center px-8 py-6 sm:px-12 lg:col-span-7 lg:px-16 lg:py-12 xl:col-span-6"
  >
    <div class="max-w-xl lg:max-w-3xl">
      <form action="#" class="mt-8 grid grid-cols-6 gap-6">
        <div class="col-span-6 sm:col-span-3">
          <label for="FirstName" class="block text-sm font-medium text-gray-700">
            First Name
          </label>

          <input
            type="text"
            id="FirstName"
            name="first_name"
            class="mt-1 w-full rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm"
          />
        </div>

        <div class="col-span-6 sm:col-span-3">
          <label for="LastName" class="block text-sm font-medium text-gray-700">
            Last Name
          </label>

          <input
            type="text"
            id="LastName"
            name="last_name"
            class="mt-1 w-full rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm"
          />
        </div>

        <div class="col-span-6">
          <label for="Email" class="block text-sm font-medium text-gray-700"> Email </label>

          <input
            type="email"
            id="Email"
            name="email"
            class="mt-1 w-full rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm"
          />
        </div>

        <div class="col-span-6 sm:col-span-3">
          <label for="Password" class="block text-sm font-medium text-gray-700"> Password </label>

          <input
            type="password"
            id="Password"
            name="password"
            class="mt-1 w-full rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm"
          />
        </div>

        <div class="col-span-6 sm:col-span-3">
          <label for="PasswordConfirmation" class="block text-sm font-medium text-gray-700">
            Password Confirmation
          </label>

          <input
            type="password"
            id="PasswordConfirmation"
            name="password_confirmation"
            class="mt-1 w-full rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm"
          />
        </div>

        <div class="col-span-6">
          <label for="MarketingAccept" class="flex gap-4">
            <input
              type="checkbox"
              id="MarketingAccept"
              name="marketing_accept"
              class="size-5 rounded-md border-gray-200 bg-white shadow-sm"
            />

            <span class="text-sm text-gray-700">
              I want to receive emails about events, product updates and company announcements.
            </span>
          </label>
        </div>

        <div class="col-span-6">
          <p class="text-sm text-gray-500">
            By creating an account, you agree to our
            <a href="#" class="text-gray-700 underline"> terms and conditions </a>
            and
            <a href="#" class="text-gray-700 underline">privacy policy</a>.
          </p>
        </div>

        <div class="col-span-6 justify-center sm:flex sm:items-center sm:gap-4">

            <div class="flex flex-col w-full max-w-xs gap-y-5">

                <button
                  class="inline-block shrink-0 rounded-md border border-blue-600 bg-blue-600 px-12 py-3 text-sm font-medium text-white transition hover:bg-transparent hover:text-blue-600 focus:outline-none focus:ring active:text-blue-500"
                >
                  Create an account
                </button>
                
                <button class="bg-white flex items-center text-gray-700 justify-center rounded-md gap-x-3 text-sm sm:text-base   hover:bg-gray-100 duration-300 transition-colors border px-8 py-2.5">
                    <svg class="w-5 h-5 sm:h-6 sm:w-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_3033_94454)">
                        <path d="M23.766 12.2764C23.766 11.4607 23.6999 10.6406 23.5588 9.83807H12.24V14.4591H18.7217C18.4528 15.9494 17.5885 17.2678 16.323 18.1056V21.1039H20.19C22.4608 19.0139 23.766 15.9274 23.766 12.2764Z" fill="#4285F4"/>
                        <path d="M12.2401 24.0008C15.4766 24.0008 18.2059 22.9382 20.1945 21.1039L16.3276 18.1055C15.2517 18.8375 13.8627 19.252 12.2445 19.252C9.11388 19.252 6.45946 17.1399 5.50705 14.3003H1.5166V17.3912C3.55371 21.4434 7.7029 24.0008 12.2401 24.0008Z" fill="#34A853"/>
                        <path d="M5.50253 14.3003C4.99987 12.8099 4.99987 11.1961 5.50253 9.70575V6.61481H1.51649C-0.18551 10.0056 -0.18551 14.0004 1.51649 17.3912L5.50253 14.3003Z" fill="#FBBC04"/>
                        <path d="M12.2401 4.74966C13.9509 4.7232 15.6044 5.36697 16.8434 6.54867L20.2695 3.12262C18.1001 1.0855 15.2208 -0.034466 12.2401 0.000808666C7.7029 0.000808666 3.55371 2.55822 1.5166 6.61481L5.50264 9.70575C6.45064 6.86173 9.10947 4.74966 12.2401 4.74966Z" fill="#EA4335"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_3033_94454">
                        <rect width="24" height="24" fill="white"/>
                        </clipPath>
                        </defs>
                    </svg>
            
                    <span>Sign in with Google</span>
                </button>
            </div>
            
            
            
        </div>
    </form>
    <p class="py-4 mt-4 text-sm text-gray-500 sm:mt-0">
        Already have an account?
        <a href="#" class="text-gray-700 underline">Log in</a>.
      </p>
    
    </div>
  </main>
</body>
</html>