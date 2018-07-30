<ul>
    @if(setting('site.info_email') != null)
    <li>
        <a href="mailto:{{ setting('site.info_email') }}">
            <i class="fa fa-envelope"></i>{{ setting('site.info_email') }}
        </a>
    </li>
    @endif
    @if(setting('site.phone_number') != null)
    <li>
        <a href="tel:{{ setting('site.phone_number') }}">
            <i class="fa fa-phone"></i>{{ setting('site.phone_number') }}
        </a>
    </li>
    @endif
    @if(setting('site.schedule') != null)
    <li>
        <a><i class="fa fa-clock-o"></i>{{ setting('site.schedule') }}</a>
    </li>
    @endif
</ul>
