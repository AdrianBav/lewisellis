<header>
    <a href="{{ site_url }}" title="{{ settings:site_name }}">
        <img src="{{ theme_url }}/assets/images/logo.jpg" alt="{{ settings:site_name }}" />
    </a>

    {{ if content:is_home }}
        <h1 class="hide">{{ settings:site_name }}</h1>
    {{ endif }}
</header>