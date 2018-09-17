@empty(!$contact->fb_link)
    <li class="facebook">
        <a href="{{ $contact->fb_link}}">
            <i class="fa fa-facebook"></i>
        </a>
    </li>
@endempty

@empty(!$contact->linkedin_link)
    <li class="linkedin">
        <a href="{{ $contact->linkedin_link }}">
            <i class="fa fa-linkedin"></i>
        </a>
    </li>
@endempty

@empty(!$contact->google_link)
    <li class="googleplus">
        <a href="{{ $contact->google_link}}">
            <i class="fa fa-google-plus"></i>
        </a>
    </li>
@endempty

@empty(!$contact->youtube_link)
    <li class="youtube">
        <a href="{{ $contact->youtube_link}}">
            <i class="fa fa-youtube-play"></i>
        </a>
    </li>
@endempty