<style type="text/css">
.abfullpage{ width: 0px;height: 0px;z-index: 0;background-color: blue;float: left;top: 0px;left: 0px;position: fixed;opacity: 0.3;display: none; }
</style>
<div class="abfullpage">

</div>
<div class="bravo_header">
    <div class="{{$container_class ?? 'container'}}">
        <div class="content">
            <div class="header-left">
                <a href="{{url(app_get_locale(false,'/'))}}" class="bravo-logo">
                    @if($logo_id = setting_item("logo_id"))
                        <?php $logo = get_file_url($logo_id,'full') ?>
                        <img class="logo" src="{{$logo}}" alt="{{setting_item("site_title")}}">
                    @endif
                </a>
                <div class="bravo-menu">
                <?php generate_menu('primary') ?>
                </div>
            </div>
            <div class="header-right">
                @if(!empty($header_right_menu))
                    <ul class="topbar-items">
                        @include('Language::frontend.switcher')
                    </ul>
                @endif
                <button class="bravo-more-menu">
                    <i class="fa fa-bars"></i>
                </button>
            </div>
        </div>
    </div>
    <div class="bravo-menu-mobile" style="display:none;">
        <div class="user-profile">
            <div class="b-close"><i class="icofont-scroll-left"></i></div>
            <div class="avatar"></div>
            <ul>
            </ul>
            <ul class="multi-lang">
                @include('Language::frontend.switcher')
            </ul>
        </div>
        <div class="g-menu">
            <?php generate_menu('primary') ?>
        </div>
    </div>
</div>
