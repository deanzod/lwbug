`composer install`

migrate and seed

Click the button - you will get 5 companies in the array when there should only be 1

Remove the boot() method from the Related model and the problem goes away.
OR change `\Auth::user()->companies->first()->id` to `\Auth::user()->companies()->first()->id`
