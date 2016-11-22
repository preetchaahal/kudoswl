    $('.nav-modal-form').on('click', function(){
        var action;//1 denotes go fwd to and show next fieldset of the form and 0 denotes previous form
        if($(this).hasClass('continue'))
            action = 1;
        else if($(this).hasClass('back'))
            action = 0;
        else if($(this).hasClass('edit-fieldset-2'))
            action = 2;
        else if($(this).hasClass('edit-fieldset-3'))
            action = 3;
        else if($(this).hasClass('edit-fieldset-4'))
            action = 4;

        //check if all fields are filled
        //check the value of data-fieldset field to hide and show apt fieldset group
        var currFieldset = parseInt($(this).parents('fieldset').attr('data-fieldset'));
        //how next fieldset grp 
        //console.log("Current fieldset grp ="+(currFieldset));
        $(this).parents('form').each(function(){
            $(this).find('fieldset').each(function(){
                if(action == 1)
                {
                    if( $(this).attr('data-fieldset') != currFieldset+1 ) 
                        //console.log(this);
                        $(this).hide();
                    else
                        //console.log(this);
                        $(this).show();
                }
                else if(action == 0)
                {
                    if( $(this).attr('data-fieldset') != currFieldset-1 ) 
                        //console.log(this);
                        $(this).hide();
                    else
                        //console.log(this);
                        $(this).show();
                }
                else if(action == 2)
                {
                    if( $(this).attr('data-fieldset') != 2 ) 
                        //console.log(this);
                        $(this).hide();
                    else
                        //console.log(this);
                        $(this).show();
                }
                else if(action == 3)
                {
                    if( $(this).attr('data-fieldset') != 3 ) 
                        //console.log(this);
                        $(this).hide();
                    else
                        //console.log(this);
                        $(this).show();
                }
                else if(action == 4)
                {
                    if( $(this).attr('data-fieldset') != 4 ) 
                        //console.log(this);
                        $(this).hide();
                    else
                        //console.log(this);
                        $(this).show();
                }
            });
        });
        //$(this).find("[data-fieldset='1']").hide();
    });

      //show hide content on change of input by user
    $('.show-hide-select').on('change', function(){
      var selectedoption = $(this);
      if( selectedoption.val() == "No" )
      {
        $('.modal-body .hidden-form').each(function(){
            $(this).show();
        });
      }
      else
      {
          $('.modal-body .hidden-form').each(function(){
            $(this).hide();
        });
      }
    });
    $('.toggle-policy').on('change', function(){
      var selectedoption = $(this);
      if( selectedoption.val() == "Yes" )
          $('.policy-data').show();
      else
          $('.policy-data').hide();
    });
