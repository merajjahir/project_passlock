
  
  
  <x-app-layout>
    <x-slot name="header">
            {{ __('And this is the settings page ') }}
    </x-slot>
  
 
    <div class="row  mt-2 ml-0 pl-0 mr-0 pr-0 " >
        <div class="col-lg-2 col-md-4 col-sm-4  pt-5  bd-sidebar">
            <x-settingsNavigation></x-settingsNavigation>
        </div>

        <div class="col-lg-10  col-md-8  col-sm-8  text-muted ">
            <div id="set_form_body" style="display: none" class="pt-5">
                <x-settings-from ></x-settings-from>
                
            </div>  
            <div id="set_price_body" style="display:block " class="py-3">
                <x-price></x-price>
                
            </div>    
        </div>
    </div>

    
    <div class=" mt-5">
        <x-footer></x-footer>
    </div>

</x-app-layout>


<script type="text/javascript">
   
   const setting_from_btn = document.getElementById('profile_setting'); 
   const setting_price_btn = document.getElementById('profile_price'); 
   const set_form_body = document.getElementById('set_form_body'); 
   const set_price_body = document.getElementById('set_price_body'); 



    
    setting_from_btn.addEventListener('click',() => {
                set_form_body.style.display = "block";
                set_price_body.style.display = "none";
    })
    setting_price_btn.addEventListener('click',() => {
                set_form_body.style.display = "none";
                set_price_body.style.display = "block";
    })
  

</script>