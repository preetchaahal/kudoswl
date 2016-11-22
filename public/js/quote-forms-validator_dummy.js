// var catSelected;

function saveCatSelected(subCatSelected) {
    catSelected = subCatSelected;
    multiFormValidator(catSelected);

}


// $(document).ready(function(){
//     multiFormValidator();
// });

$('#final-btn').on('click', function(){
    multiFormValidator();
});

function multiFormValidator(catSelected) {
    
    console.log("Ya Im here with"+catSelected);

    $(document).ready(function() {
        $("#QuoteForm").formValidation({
            framework: "bootstrap",
            icon: {
                valid: "glyphicon glyphicon-ok",
                validating: "glyphicon glyphicon-refresh"
            },
            excluded: ':disabled',
            fields: {
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
                Country: {
                    validators: {
                        notEmpty: {
                            message: "Country is Required"
                        }
                    }
                },
                Contact_Email: {
                    validators: {
                        notEmpty: {
                            message: "Email is Required"
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
                },
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
                Date_Of_Birth: {
                    validators: {
                        notEmpty: {
                            message: "DOB is Required"
                        }
                    }
                },
                Years_At_The_Current_Address: {
                    validators: {
                        notEmpty: {
                            message: "Years Required"
                        },
                        regexp: {
                            regexp:/^[0-9]+$/,
                        }
                    }
                },
                Acknowledge: {
                    validators: {
                        notEmpty: {
                            message: "Can't Proceed. Please Acknowledge"
                        }
                    }
                },
                Year_Built: {
                    validators: {
                        notEmpty: {
                            message: "Year Built Required"
                        },
                        regexp: {
                            regexp: /^[0-9]+$/,
                            message: 'Should be Numerics'
                        }
                    }
                },
                Square_Footage: {
                    validators: {
                        notEmpty: {
                            message: "Square Footage Required"
                        },
                        regexp: {
                            regexp: /^[0-9]+$/,
                            message: 'Should be Numerics'
                        }
                    }
                },
                Number_Of_Stories: {
                    validators: {
                        notEmpty: {
                            message: "Number of Stories Required"
                        }
                    }
                },
                Personal_Property_Coverage_Limit: {
                    validators: {
                        notEmpty: {
                            message: "Personal Property Coverage Limit Required"
                        }
                    }
                },
                Number_Of_Units_In_Building: {
                    validators: {
                        notEmpty: {
                            message: "Number Of Units in Building Required"
                        }
                    }
                },
                Construction_Type: {
                    validators: {
                        notEmpty: {
                            message: "Construction Type Required"
                        }
                    }
                },
                Roof_Type: {
                    validators: {
                        notEmpty: {
                            message: "Roof Type Required"
                        }
                    }
                },
                Home_Burglary_System: {
                    validators: {
                        notEmpty: {
                            message: "Home Burglary System Field Required"
                        }
                    }
                }
            }
        }).on('success.form.fv', function(e) {
            
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