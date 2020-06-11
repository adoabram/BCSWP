<?php wp_footer(); ?>
<footer>
		<section class="main_footer">
		<h6 class="visually-hidden">Контактна інформація компанії BCS</h6>
			<div class="main_footer-inf">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2540.2684058932705!2d30.60814241573147!3d50.454726379475964!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4cffbc899c43d%3A0xa58248a4339d9199!2z0LLRg9C70LjRhtGPINCR0YPQtNGW0LLQtdC70YzQvdC40LrRltCyLCAxMjgsINCa0LjRl9CyLCAwMjAwMA!5e0!3m2!1sru!2sua!4v1576254613268!5m2!1sru!2sua" width="400" height="350" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
			</div>
			<div class="main_footer-category">
				<h3>Каталог</h3>
				<ul>
					<li><a href="#">Бетонні кільця</a></li>
					<li><a href="#">Плити перекриття</a></li>
					<li><a href="#">Плити днища</a></li>
					<li><a href="#">Кільця опорні</a></li>
					<li><a href="#">Шлакоблок</a></li>
					<li><a href="#">Іньше</a></li>
				</ul>
			</div>
			<div class="main_footer-menu">
				<h3>Меню</h3>
				<ul> 
					<?php
						wp_nav_menu(array(
							'theme_location'=>'header_menu',
							'menu'=>'Header Menu',
							'menu_class'=>'',
							'walker'=>new Aletheme_Nav_Walker(),
							'container'=>'',
                   		));
                	?>
				</ul>
			</div>
			<div class="main_footer-contact">
				<h3>Контакти</h3>
				<ul class="main_footer-contact_contacts">
					<?php if (ale_get_option('footer_email')){
						echo '<li><i class="far fa-envelope-open"></i>'.esc_attr(ale_get_option('footer_email')).'</li>';
                    }?>
					<?php if (ale_get_option('footer_call')){
						echo '<li><i class="fas fa-phone-alt"></i>'.esc_attr(ale_get_option('footer_call')).'</li>';
                    }?>
					<?php if (ale_get_option('footer_call_next')){
						echo '<li><i class="fas fa-phone-alt"></i>'.esc_attr(ale_get_option('footer_call_next')).'</li>';
                    }?>
					<?php if (ale_get_option('footer_address')){
						echo '<li><i class="fas fa-map-marked-alt"></i>'.esc_attr(ale_get_option('footer_address')).'</li>';
                    }?>
				</ul>
				<div class="main_footer-social">
					<?php if (ale_get_option('fb')){
						echo '<a href="'.esc_attr(ale_get_option('fb')).'" class="facebook_link" target="_blank"></a>';
					}?>
					<?php if (ale_get_option('you')){
						echo '<a href="'.esc_attr(ale_get_option('you')).'" class="youtube_link" target="_blank"></a>';
					}?>
				</div>
			</div>
		</section>		
		<div class="second_footer">
			<?php if (ale_get_option('copyrights')){
				echo '<p class="second_footer-copi">'.esc_attr(ale_get_option('copyrights')).'</p>';
			}?>
		</div>		
	</footer>
	
	<div class="modal">
		<form id="message" method="post"> 
			<div class="formHeader">
				<div class="contact_form_header">Ваше повідомлення</div>
					<div>
						<span class="close">x</span>
					</div>
			</div>
			<div class="formInner">
				<p>Ваше ім'я (обов'язково)<br>
					<input type="text" name="name" required aria-invalid="false" maxlength="30" size="30">
				</p>
				<p>Ваш телефон (обов'язково)<br>
					<input type="text" name="phone" placeholder="38-___-___-__-__" required aria-invalid="false" size="30">
				</p>
				<p class='hiding object'>Адреса доставки (обов'язково)<br>
					<input type='text' name='address' required size='30'>
				</p>
				<p class='hiding'>Додаткова інформація<br>
					<textarea name='messagetext' rows='10' aria-invalid='false'></textarea>
				</p>
			</div>
		</form>
    </div>
	
	<section class="modal_contact">
		<h6 class="visually-hidden">Контактна інформація компанії BCS</h6>
		<button class="modal_contact-close" type="button">Закрыть</button>
		<div class="main_footer-inf">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2540.2684058932705!2d30.60814241573147!3d50.454726379475964!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4cffbc899c43d%3A0xa58248a4339d9199!2z0LLRg9C70LjRhtGPINCR0YPQtNGW0LLQtdC70YzQvdC40LrRltCyLCAxMjgsINCa0LjRl9CyLCAwMjAwMA!5e0!3m2!1sru!2sua!4v1576254613268!5m2!1sru!2sua" width="400" height="350" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
		</div>
		<ul class="main_footer-contact_contacts">
			<li><i class="far fa-envelope-open"></i>office@bcs.com.ua</li>
			<li><i class="fas fa-phone-alt"></i>096 353 56 67</li>
			<li><i class="fas fa-phone-alt"></i>096 353 56 67</li>
			<li><i class="fas fa-map-marked-alt"></i>м.Київ, вул.Будівельників, 128</li>
		</ul>		
	</section>
	<div class="modal_owerlay"></div>

<script>$(function(){$(window).resize(function(){$('.header-main').height($(window).height()*0.952);$(".header-menu").removeClass("show")});$(window).resize();$(".header-main").append('<video id="video-background" class="video" poster="\/resources\/img\/rings.jpg" preload="auto" autoplay="autoplay" loop="loop" muted=""><source src="\/e-s-b.mp4" type="video\/mp4"><source src="\/e-s-b.webm" type="video\/webm"><source src=\/e-s-b.ogv type="video\/ogg"><\/video>');$total=v=0,table='';function mark(){$total=0;$(".OfferCatalog input").filter(function(){return $.isNumeric(this.value)&this.value>0;}).parents("tr").removeClass("unchecked").addClass("checked");$(".OfferCatalog input").filter(function(){return !this.value||this.value<0;}).parents("tr").removeClass("checked").addClass("unchecked").find('.sum').text('');$(".checked").each(function(){var $num=$(this).find('input').val(),$price=$(this).find('.price').text();$(this).find('.sum').text($price*$num);$total+=Number($(this).find('.sum').text());});$(".OfferCatalog").find('.total').text($total+' грн');};$(".OfferCatalog input").on("input propertychange focusout",mark);$("form").on('submit',function(){var $id=this.id;$.ajax({url:"\/gform",type:"POST",data:"id="+$id+"&"+$(this).serialize()+"&table="+table+"&v="+v+"&lang=uk&sum="+$total,cache:false,success:function(result){mes=$.parseJSON(result).message;cl=$.parseJSON(result).class;if(cl=="success"||cl=="error"){$(".modal,.hiding").hide();v=0;$("body").append('<div id="result"><div class="'+cl+'"><p>'+mes+'<\/p><\/div><\/div>');}else{$("body").append('<div id="result"><div class="error"><p>Помилка при відправці повідомлення!<\/p><\/div><\/div>');};dataLayer.push({'event':'ajaxSuccess','FormID':$id});$("#result").click(function(){$("#result,form p:last,.offer_list").remove();v=0,table='';});}});return false;});$(".callback").click(function(){$("form").attr("id","callback");$('.contact_form_header').text("Зворотний дзвінок");$(".formInner").append('<p><input class="button waitcall" type="submit" value="ПЕРЕДЗВОНІТЬ МЕНІ">');$(".object>input").removeAttr("required");$(".modal").show();v=1;});$(".consult").click(function(){$("form").attr("id","consult");$('.contact_form_header').text("Консультація");$(".formInner").append('<p><input class="button waitconsult" type="submit" value="ЗАМОВИТИ">');$(".object>input").removeAttr("required");$(".modal").show();v=1;});$(".checkout").click(function(){if($(".checked").length<=0){alert('Ви не обрали жодного виробу, зробіть свій вибір');return false;};var obj=$(".OfferCatalog").clone();obj.find(".unchecked").remove();obj.find("th").parent().remove();obj.find("tr,td").removeAttr('class itemprop itemscope itemtype');obj.find("input").each(function(){var $num=$(this).val();$(this).parent().append($num+"шт");$(this).remove();});obj.find("tbody").each(function(){table+=$(this).html()});$("form").attr("id","order");$('.contact_form_header').text("Оформлення замовлення");$(".formInner").append("<table class='offer_list'><tbody><tr><th width='250'>Назва виробу<\/th><th width='50'>Ціна<\/th><th width='50'>Кіль-ть<\/th><th width='70'>Сума<\/th><\/tr>"+table+"<\/tbody><\/table><p><input class='button order' type='submit' value='ЗАМОВИТИ'><\/p>");$(".object>input").attr("required","");$(".modal,.hiding").show();v=1;});$(".close").click(function(){$(".modal,.hiding").hide();v=0,table='';$("form p:last,.offer_list").remove();});$('body').append('<a href="index.html#page" id="go-top" title="Вгору"><img src="images/dot-arrow.png" alt="to-top"><\/a>');$.fn.scrollToTop=function(){$(this).hide().removeAttr("href");if($(window).scrollTop()>="250")$(this).fadeIn("slow");var scrollDiv=$(this);$(window).scroll(function(){if($(window).scrollTop()<="250"){$(scrollDiv).fadeOut("slow")}else{$(scrollDiv).fadeIn("slow")};});$(this).click(function(){$("html,body").animate({scrollTop:0},"slow")})};$("#go-top").scrollToTop();})</script>


</body>
</html>