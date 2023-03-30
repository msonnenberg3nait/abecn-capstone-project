<x-layout>
    <main>

        <form method="POST" action="#" x-data="{ formStep: 1 }">
            <h1>Membership Application</h1>

            <div x-cloak x-show="formStep === 1">
                <h2>Personal Information</h2>
                <p>All fields marked with a red asterisk * are required.</p>
                <div>
                    <label for="firstname">First Name</label>
                    <input type="text" name="firstname" id="firstname">
                </div>
                <div>
                    <label for="lastname">Last Name</label>
                    <input type="text" name="lastname" id="lastname">
                </div>
                <div>
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password">
                </div>
                <div>
                    <label for="confirmpassword">Confirm Password</label>
                    <input type="password" name="confirmpassword" id="confirmpassword">
                </div>
                <div>
                    <label for="birthday">Date of Birth</label>
                    <input type="date" name="birthday" id="birthday">
                </div>
                <div>
                    <label for="organization">Organization</label>
                    <input type="text" name="organization" id="organization">
                </div>
                <div>
                    <label for="specialty">Specialty</label>
                    <input type="text" name="specialty" id="specialty">
                </div>
            </div>

            <div x-cloak x-show="formStep === 2">
                <h2>Contact Information</h2>
                <p>All fields marked with a red asterisk * are required.</p>
                <div>
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email">
                </div>
                <div>
                    <label for="phone">Phone Number</label>
                    <input type="tel" name="phone" id="phone">
                </div>
                <div>
                    <label for="address">Address Line 1</label>
                    <input type="text" name="address" id="address">
                </div>
                <div>
                    <label for="address2">Address Line 2</label>
                    <input type="text" name="address2" id="address2">
                </div>
                <div>
                    <label for="city">City</label>
                    <input type="text" name="city" id="city">
                </div>
                <div>
                    <label for="postal">Postal Code</label>
                    <input type="text" name="postal" id="postal">
                </div>
            </div>

            <div x-cloak x-show="formStep === 3">
                <h2>Billing Information</h2>
                <p>All fields marked with a red asterisk * are required.</p>
                <div>
                    <label for="cardholder">Cardholder Name</label>
                    <input type="text" name="cardholder" id="cardholder">
                </div>
                <div>
                    <label for="cardnumber">Card Number</label>
                    <input type="number" name="cardnumber" id="cardnumber">
                </div>
                <div>
                    <label for="cardexpiration">Expiration Date</label>
                    <input type="date" name="cardexpiration" id="cardexpiration">
                </div>
                <div>
                    <label for="cvv">CVV</label>
                    <input type="number" name="cvv" id="cvv">
                </div>
            </div>

            <button
              x-cloak
              x-show="formStep > 1"
              @click="formStep -= 1"
              type="button"
              class="button"
            >
              Back
            </button>

            <button
              x-cloak
              x-show="formStep < 3"
              @click="formStep += 1"
              type="button"
              class="button"
            >
              Next
            </button>

            <input x-cloak x-show="formStep === 3" type="submit" value="PURCHASE">
        </form>

    </main>
</x-layout>