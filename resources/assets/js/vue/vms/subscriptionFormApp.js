/**
 * This Vue.js ViewModel(vm) controls the subscriptionForm's data and methods
 *
 */


/**
 * Function to subscribe to a plan created on Paystack
 *
 * @param primaryKey      Our App's public key on paystack's platform
 * @param customerEmail   The customer's email address
 * @param amount          The amount to be payed to paystack
 * @param userPhoneNumber The user's phone number
 * @param tranRef         A unique code used to identify each transaction
 */
var paystackSubscriptionMethod =
    function subscribeToPlan(primaryKey, customerEmail, amount, userPhoneNumber, tranRef )
    {
        var handler = PaystackPop.setup({
            key: primaryKey,
            email: customerEmail,
            amount: amount,
            ref: tranRef,
            metadata: {
                custom_fields: [
                    {
                        display_name: "Mobile Number",
                        variable_name: "mobile_number",
                        value: userPhoneNumber
                    }
                ]
            },
            callback: function(response){
                alert('success. transaction ref is ' + response.reference);
            },
            onClose: function(){
                alert('window closed');
            }
        });
        handler.openIframe();
    }

var subscriptionForm = new Vue({

   el: "#subscriptionFormApp",

    data: {
        primaryKey
    },

    methods: {
        paystackSubscriptionMethod: paystackSubscriptionMethod()
    }

});