@extends('master')
@section('menu')
<script src="{{asset('/')}}public/front_end/js/scripts.js"></script>
<div class="container">
    <section class="menu_wrap type_2 relative clearfix t_xs_align_c m_bottom_20">
        <!--button for responsive menu-->
        <button id="menu_button" class="r_corners centered_db d_none tr_all_hover d_xs_block m_bottom_15">
            <span class="centered_db r_corners"></span>
            <span class="centered_db r_corners"></span>
            <span class="centered_db r_corners"></span>
        </button>
        <!--main menu-->
        <nav role="navigation" class="f_left f_xs_none d_xs_none t_xs_align_l">	
            <ul id="i_d" class="horizontal_list main_menu clearfix">
                <li class="relative f_xs_none m_xs_bottom_5"><a href="{{URL::to('/')}}" class="tr_delay_hover color_light tt_uppercase"><b>Home</b></a></li>
                <li class="relative f_xs_none m_xs_bottom_5"><a href="{{URL::to('/contact')}}" class="tr_delay_hover color_light tt_uppercase"><b>Contact</b></a></li>
                <li class="relative f_xs_none m_xs_bottom_5"><a href="{{URL::to('/about')}}" class="tr_delay_hover color_light tt_uppercase"><b>About</b></a></li>
            </ul>
        </nav>
    </section>
</div>

<script>

document.getElementById('i_d').addEventListener("click", abc);
function abc() {
    document.getElementById('i_d').classList.add("current");
}


</script>





@endsection