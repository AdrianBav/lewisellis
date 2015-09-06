<footer>
    <div class="row">
        <div class="small-12 columns">

            <div class="row">            
                <div class="small-12 medium-3 columns featured-services">
                    <h3>Featured Services</h3>
                    <ul class="triangle">
                    {{ mediaboxes:mediaboxes mediabox_id="2" limit="3" }}
                        <li><a href="{{ link_url }}" target="{{ link_target }}">{{ title }}</a></li>
                    {{ /mediaboxes:mediaboxes }}
                    </ul>
                </div>
                <div class="small-12 medium-3 columns featured-services">
                    <h3 class="hide-for-small-only">&nbsp;</h3>
                    <ul class="triangle">
                    {{ mediaboxes:mediaboxes mediabox_id="2" limit="2" limit_offset="3" }}
                        <li><a href="{{ link_url }}" target="{{ link_target }}">{{ title }}</a></li>
                    {{ /mediaboxes:mediaboxes }}
                    </ul>
                </div>
                <div class="small-12 medium-3 columns featured-services">
                    <h3 class="hide-for-small-only">&nbsp;</h3>
                    <ul class="triangle">
                    {{ mediaboxes:mediaboxes mediabox_id="2" limit="2" limit_offset="5" }}
                        <li><a href="{{ link_url }}" target="{{ link_target }}">{{ title }}</a></li>
                    {{ /mediaboxes:mediaboxes }}
                    </ul>
                </div>
                <div class="small-12 medium-3 columns">
                    <h3>Contact Us</h3>
                    <ul class="no-bullet">
                    {{ mediaboxes:mediaboxes mediabox_id="3" }}
                        <li>{{ title }}: {{ text_1 }}</li>
                    {{ /mediaboxes:mediaboxes }}
                    </ul>
                </div>
            </div>

            <hr>

            <div class="row">
                <div class="small-12 large-2 columns">            
                    <ul class="inline-list socials">
                    {{ mediaboxes:mediaboxes mediabox_id="4" }}
                    {{ if title != "RSS" }}
                        <li><a href="{{ link_url }}" target="{{ link_target }}" title="{{ title }}"><img src="{{ helper:site_url path=image }}" alt="{{ alt }}"></a></li>
                    {{ endif }}
                    {{ /mediaboxes:mediaboxes }}
                    </ul>
                </div>

                <div class="small-12 large-8 columns">
                    {{ settings:site_name }} &copy; {{ helper:date format="Y" }} | <a href="http://www.einsteinseyes.com/what-we-do/web-design" target="_blank">Dallas Web Design by Einsteins Eyes</a>
                </div>

                <div class="small-12 large-2 columns text-right">
                    <a href="https://support.lewisellis.com/" target="_blank">Login</a>
                </div>
            </div>        

        </div>
    </div>
</div>