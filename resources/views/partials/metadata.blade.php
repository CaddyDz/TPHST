<ul>
    @if(setting('info_email') != null)
    <li>
        <a href="mailto:{{ setting('info_email') }}">
            <i class="fa fa-envelope"></i>{{ setting('info_email') }}
        </a>
    </li>
    @endif
    @if(setting('phone_number') != null)
    <li>
        <a href="tel:{{ setting('phone_number') }}">
            <i class="fa fa-phone"></i>{{ setting('phone_number') }}
        </a>
    </li>
    @endif
    @if(setting('schedule') != null)
    <li>
        <a><i class="fa fa-clock-o"></i>{{ setting('schedule') }}</a>
    </li>
    @endif
</ul>
