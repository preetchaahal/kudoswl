 //script for countries tates and cities
    //fetch values for countries
    $.ajax({
      url: "handlers/fetch_city_state_country.php",
      data: {
        rqst:   "countries", 
      },
      dataType: "json"
    }).done(function(data){
          $('.countries').append('<option></option>');
          $.each(data, function (name, value) {
            //adding data to select options for countries
            $('.countries').append('<option value="'+value['id']+'">'+value['name']+'</option>')
          });
    });
    $('.selectAddress .countries').on('change', function(){
      var countryId = $(this).val();
      //get the next element with class .states
      var stateElement = $(this).parent().parent().nextAll('.form-group:first').find('.states').eq(0);
      $(this).parent().parent().nextAll('.form-group').eq(1).find('.cities').eq(0).html('');
      //fetch states on the basis of selection
      $.ajax({
        url: "handlers/fetch_city_state_country.php",
        data: {
          countryId: countryId,
          rqst:      "states"
        },
        dataType: "json"
      }).done(function(data){
        //console.log(nextselect);
        //clear contents of the state and city options tag
          stateElement.html('');
        stateElement.append('<option></option>');
        $.each(data, function (name, value) {
            //adding data to select options for states
            stateElement.append('<option value="'+value['id']+'">'+value['name']+'</option>');
          });
      });
      
    });
    $('.selectAddress .states').on('change', function(){
      var stateId = $(this).val();
      //get the next element with class .states
      var cityElement = $(this).parent().parent().nextAll('.form-group:first').find('.cities').eq(0);
      //fetch states on the basis of selection
      $.ajax({
        url: "handlers/fetch_city_state_country.php",
        data: {
          stateId: stateId,
          rqst:    "cities"
        },
        dataType: "json"
      }).done(function(data){
        //console.log(nextselect);
        //clear contents of the state options tag
          cityElement.html('');
          cityElement.append('<option></option>');
        $.each(data, function (name, value) {
            //adding data to select options for states
            cityElement.append('<option value="'+value['id']+'">'+value['name']+'</option>');
          });
      });
      
    });