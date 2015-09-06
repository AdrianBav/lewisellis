<!DOCTYPE html>
<!--[if IE 9]><html class="lt-ie10" lang="en"><![endif]-->
<html class="no-js" lang="en">

    {{ theme:partial name="head" }}

    <body>
        
        <!-- Header -->
        <div class="row">
            <div class="small-12 columns">
                {{ theme:partial name="header" }}
            </div>
        </div>      

		<!-- Navigation-->            
        <div class="row">
            <div class="small-12 columns">
                {{ theme:partial name="navigation" }}
            </div>
        </div>

		<!-- The slider only appears on the Home page -->
		{{ if content:is_home }}
			{{ theme:partial name="slider" }}
        {{ endif }}

		<!-- Page Content -->
        <div class="row" id="page-content">
            {{ content }}            
        </div>        

        {{ theme:partial name="footer" }}

        <script src="{{ theme_url }}/assets/js/vendor/jquery.js"></script>
        <script src="{{ theme_url }}/assets/js/foundation.min.js"></script>
        <script>
            $(document).foundation();
        </script>        

        {{ theme:partial name="scripts" }}
    </body>

</html>