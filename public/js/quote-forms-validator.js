/*  NOTE:
* This validator works for every quote-form.
* same type of inputs names are given same in every form.
* eg. An input field for "first name" will have name attribute something like
* eg. <input name="First_Name">, similarly for "phone" <input name="Phone_Number">
* Also, if you have new field(s) introduced, just declare the name and validators here.
*
* Documentation: http://www.formvalidation.io/getting-started
*/

//the siteURL variable exists in quote.php <script> block
var catSelected;

function saveCatSelected(subCatSelected) {
    catSelected = subCatSelected;

}

function quoteFormSubmitter() {

    console.log("Yes imhere"+catSelected);
    
    $(document).ready(function() {
        $("#QuoteForm").formValidation({
            framework: "bootstrap",
            icon: {
                valid: "glyphicon glyphicon-ok",
                validating: "glyphicon glyphicon-refresh"
            },
            fields: {
                First_Name: {
                    validators: {
                        notEmpty: {
                            message: "The First Name is Required"
                        },
                        stringLength: {
                            min: 3,
                            max: 30,
                            message: "The First Name must be more than 3 and less than 30 characters long"
                        },
                        regexp: {
                            regexp: /^[a-zA-Z]*$/,
                            message: "The First Name can only consist of alphabetical chars"
                        }
                    }
                },
                Last_Name: {
                    validators: {
                        notEmpty: {
                            message: "The Last Name is Required"
                        },
                        stringLength: {
                            min: 3,
                            max: 30,
                            message: 'The Last Name must be more than 3 and less than 30 characters long'
                        },
                        regexp: {
                            regexp: /^[a-zA-Z]+$/,
                            message: 'The First Name can only consist of alphabetical chars'
                        }
                    }
                },
                Name_Of_The_Company: {
                    validators: {
                        notEmpty: {
                            message: "Name of the Company is Required"
                        },
                        stringLength: {
                            min: 3,
                            message: 'Name of Company must be atleast 3 characters long'
                        }
                    }
                },
                FID_Number: {
                    validators: {
                        notEmpty: {
                            message: "FID Number is Required"
                        },
                        regexp: {
                            regexp: /^[0-9]+$/,
                            message: 'The FID Number can only consist of Numerics'
                        }
                    }
                },
                Phone_Number: {
                    validators: {
                        notEmpty: {
                            message: "The Phone Number is Required"
                        },
                        regexp: {
                            regexp: /^[0-9]+$/,
                            message: 'The Phone Number can only consist of Numerics'
                        },
                        stringLength: {
                            min: 10,
                            max: 12,
                            message: 'Phone Number [10-12 digits expected]'
                        }
                    }
                },
                Contact_Email: {
                    validators: {
                        notEmpty: {
                            message: "The Contact Email is Required"
                        }
                    }
                },
                Address: {
                    validators: {
                        notEmpty: {
                            message: "The Address is Required"
                        },
                        stringLength: {
                            min: 10,
                            message: 'Atleast 10 Chars Expected '
                        }
                    }
                },
                Type_of_vehicle: {
                    validators: {
                        notEmpty: {
                            message: "The Type of Vehicle is Required"
                        }
                    }
                },
                ZIP_Code: {
                    validators: {
                        notEmpty: {
                            message: "The ZIP Code is Required"
                        },
                        regexp: {
                            regexp: /^[0-9]+$/,
                            message: 'The ZIP Code can only consist of Numerics'
                        },
                        stringLength: {
                            min: 6,
                            max: 6,
                            message: 'Exactly 6 Digits'
                        }
                    }
                },
                License_Plate_Number: {
                    validators: {
                        notEmpty: {
                            message: "The License Plate Number is Required"
                        }
                    }
                },
                Vehicle_VIN_Number: {
                    validators: {
                        notEmpty: {
                            message: "The Vehicle VIN Number is Required"
                        }
                    }
                },
                Number_Of_Drivers:{
                    validators: {
                        notEmpty: {
                            message: "Number of Drivers is Required"
                        }
                    }
                },
                Is_The_Car_Finances: {
                    validators: {
                        notEmpty: {
                            message: "Is your Car Financed is Required"
                        }
                    }
                },
                Street_Address: {
                    validators: {
                        notEmpty: {
                            message: "Street Address Required"
                        }
                    }
                },
                Apartment_Number: {
                    validators: {
                        notEmpty: {
                            message: "Apartment Number Required"
                        }
                    }
                },
                Country: {
                    validators: {
                        notEmpty: {
                            message: "Country is Required"
                        }
                    }
                },
                State: {
                    validators: {
                        notEmpty: {
                            message: "State is Required"
                        }
                    }
                },
                Is_Mailing_Address_Same_As_Property_Address: {
                    validators: {
                        notEmpty: {
                            message: "Select an Option"
                        }
                    }
                }
            }
        }).on('success.form.fv', function(e) {
            // Prevent form submission
            e.preventDefault();
            
             $('form').find('.subCatId').val(catSelected); //the value of hidden field in form

            var $form = $(e.target),
                fv    = $form.data('formValidation'),
                msg = "";//message to display to user

            $.ajax({
                url: siteURL+"handlers/quote_form_handler.php",
                type: "POST",
                data: $form.serialize(),
                success: function(result) {
                    // ... Process the result ...
                }
            }).done(function(data) {
                window.location.href = siteURL+"quote.php?msg="+data+"";
            }).error(function(data) {
                window.location.href = siteURL+"quote.php?msg="+data+"";
            });
        });
    });
}


function quoteFormValidator() {

    console.log("Yes imhere"+catSelected);
    
    $(document).ready(function() {
        $("#QuoteForm").formValidation({
            framework: "bootstrap",
            icon: {
                valid: "glyphicon glyphicon-ok",
                validating: "glyphicon glyphicon-refresh"
            },
            fields: {
                First_Name: {
                    validators: {
                        notEmpty: {
                            message: "The First Name is Required"
                        },
                        stringLength: {
                            min: 3,
                            max: 30,
                            message: "The First Name must be more than 3 and less than 30 characters long"
                        },
                        regexp: {
                            regexp: /^[a-zA-Z]*$/,
                            message: "The First Name can only consist of alphabetical chars"
                        }
                    }
                },
                Last_Name: {
                    validators: {
                        notEmpty: {
                            message: "The Last Name is Required"
                        },
                        stringLength: {
                            min: 3,
                            max: 30,
                            message: 'The Last Name must be more than 3 and less than 30 characters long'
                        },
                        regexp: {
                            regexp: /^[a-zA-Z]+$/,
                            message: 'The First Name can only consist of alphabetical chars'
                        }
                    }
                },
                Name_Of_The_Company: {
                    validators: {
                        notEmpty: {
                            message: "Name of the Company is Required"
                        },
                        stringLength: {
                            min: 3,
                            message: 'Name of Company must be atleast 3 characters long'
                        }
                    }
                },
                FID_Number: {
                    validators: {
                        notEmpty: {
                            message: "FID Number is Required"
                        },
                        regexp: {
                            regexp: /^[0-9]+$/,
                            message: 'The FID Number can only consist of Numerics'
                        }
                    }
                },
                Phone_Number: {
                    validators: {
                        notEmpty: {
                            message: "The Phone Number is Required"
                        },
                        regexp: {
                            regexp: /^[0-9]+$/,
                            message: 'The Phone Number can only consist of Numerics'
                        },
                        stringLength: {
                            min: 10,
                            max: 12,
                            message: 'Phone Number [10-12 digits expected]'
                        }
                    }
                },
                Contact_Email: {
                    validators: {
                        notEmpty: {
                            message: "The Contact Email is Required"
                        }
                    }
                },
                Address: {
                    validators: {
                        notEmpty: {
                            message: "The Address is Required"
                        },
                        stringLength: {
                            min: 10,
                            message: 'Atleast 10 Chars Expected '
                        }
                    }
                },
                Type_of_vehicle: {
                    validators: {
                        notEmpty: {
                            message: "The Type of Vehicle is Required"
                        }
                    }
                },
                ZIP_Code: {
                    validators: {
                        notEmpty: {
                            message: "The ZIP Code is Required"
                        },
                        regexp: {
                            regexp: /^[0-9]+$/,
                            message: 'The ZIP Code can only consist of Numerics'
                        },
                        stringLength: {
                            min: 6,
                            max: 6,
                            message: 'Exactly 6 Digits'
                        }
                    }
                },
                License_Plate_Number: {
                    validators: {
                        notEmpty: {
                            message: "The License Plate Number is Required"
                        }
                    }
                },
                Vehicle_VIN_Number: {
                    validators: {
                        notEmpty: {
                            message: "The Vehicle VIN Number is Required"
                        }
                    }
                },
                Number_Of_Drivers:{
                    validators: {
                        notEmpty: {
                            message: "Number of Drivers is Required"
                        }
                    }
                },
                Is_The_Car_Finances: {
                    validators: {
                        notEmpty: {
                            message: "Is your Car Financed is Required"
                        }
                    }
                },
                Street_Address: {
                    validators: {
                        notEmpty: {
                            message: "Street Address Required"
                        }
                    }
                },
                Apartment_Number: {
                    validators: {
                        notEmpty: {
                            message: "Apartment Number Required"
                        }
                    }
                },
                Country: {
                    validators: {
                        notEmpty: {
                            message: "Country is Required"
                        }
                    }
                },
                State: {
                    validators: {
                        notEmpty: {
                            message: "State is Required"
                        }
                    }
                },
                Is_Mailing_Address_Same_As_Property_Address: {
                    validators: {
                        notEmpty: {
                            message: "Select an Option"
                        }
                    }
                }
            }
        });
    });
}