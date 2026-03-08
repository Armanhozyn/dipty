<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="dtrixithub.com">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&amp;display=swap" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('assets/css/plugins.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <title>Dipty</title>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <style>

        
        /* PHP Email Form Messages
        ------------------------------*/
        .php-email-form .error-message {
        display: none;
        background: #df1529;
        color: #ffffff;
        text-align: left;
        padding: 15px;
        margin-bottom: 24px;
        font-weight: 600;
        }

        .php-email-form .sent-message {
        display: none;
        color: #ffffff;
        background: #059652;
        text-align: center;
        padding: 15px;
        margin-bottom: 24px;
        font-weight: 600;
        }

        .php-email-form .loading {
        display: none;
        background: var(--surface-color);
        text-align: center;
        padding: 15px;
        margin-bottom: 24px;
        }

        .php-email-form .loading:before {
        content: "";
        display: inline-block;
        border-radius: 50%;
        width: 24px;
        height: 24px;
        margin: 0 10px -6px 0;
        border: 3px solid var(--accent-color);
        border-top-color: var(--surface-color);
        animation: php-email-form-loading 1s linear infinite;
        }

        @keyframes php-email-form-loading {
        0% {
            transform: rotate(0deg);
        }
        100% {
            transform: rotate(360deg);
        }
        }

    </style>
</head>
<body class="dark">

    <!-- WRAPPER ALL -->
    <div class="tokyo_tm_all_wrap" data-magic-cursor="show" data-enter="fadeInLeft" data-exit=""> 

		<!-- PRELOADER -->
		<div id="preloader">
			<div class="loader_line"></div>
		</div>
		<!-- /PRELOADER -->

		<!-- MOBILE MENU -->
		<div class="tokyo_tm_topbar bg-white fixed top-0 left-0 right-0 h-[50px] z-[14] hidden">
			<div class="topbar_inner w-full h-full clear-both flex items-center justify-between py-0 px-[20px]">
				<div class="logo" data-type="image"> <!-- You can use image or text as logo. data-type values are "image" and "text" -->
					<a href="#">
						<img class="max-w-[100px] max-h-[40px]" src="{{ asset('assets/img/logo/logod.png') }}" alt="" />
						<h3 class="font-black font-poppins text-[25px] tracking-[4px]">DIPTY</h3>
					</a>
				</div>
				<div class="trigger relative top-[5px]">
					<div class="hamburger hamburger--slider">
						<div class="hamburger-box w-[30px]">
							<div class="hamburger-inner"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="tokyo_tm_mobile_menu fixed top-[50px] right-[-200px] h-[100vh] w-[200px] z-[15] bg-white transition-all duration-300">
			<div class="menu_list w-full h-auto clear-both float-left text-right px-[20px] pt-[100px] pb-[0px]">
				<ul class="transition_link list-none">
					<li class="active mb-[7px]"><a class="text-black font-montserrat" href="#home">Home</a></li>
					<li class="mb-[7px]"><a class="text-black font-montserrat" href="#about">About</a></li>
					<li class="mb-[7px]"><a class="text-black font-montserrat" href="#service">Service</a></li>
					<li class="mb-[7px]"><a class="text-black font-montserrat" href="#portfolio">Portfolio</a></li>
					<li class="mb-[7px]"><a class="text-black font-montserrat" href="#news">News</a></li>
					<li><a class="text-black font-montserrat" href="#contact">Contact</a></li>
				</ul>
			</div>
		</div>
		<!-- /MOBILE MENU -->

		<!-- LEFTPART -->
		<div class="leftpart w-[450px] h-[100vh] fixed flex items-center z-[12] px-[100px] py-[0px] bg-white">
			<div class="leftpart_inner w-full h-auto">
				<div class="logo" data-type="image"> <!-- You can use image or text as logo. data-type values are: "image" and "text" -->
					<a href="#">
						<img class="max-w-[150px]" src="{{ asset('assets/img/logo/logod.png') }}" alt="" />
						<h3 class="font-poppins font-black text-[31px] tracking-[5px]">TOKYO</h3>
					</a>
				</div>
				<div class="menu px-[0px] py-[50px] w-full float-left">
					<ul class="transition_link m-0 list-none">
						<li class="active m-0 w-full float-left"><a class="text-[#767676] inline-block font-medium font-montserrat transition-all duration-300 hover:text-black" href="#home">Home</a></li>
						<li class="m-0 w-full float-left"><a class="text-[#767676] inline-block font-medium font-montserrat transition-all duration-300 hover:text-black" href="#about">About</a></li>
						<li class="m-0 w-full float-left"><a class="text-[#767676] inline-block font-medium font-montserrat transition-all duration-300 hover:text-black" href="#service">Service</a></li>
						<li class="m-0 w-full float-left"><a class="text-[#767676] inline-block font-medium font-montserrat transition-all duration-300 hover:text-black" href="#portfolio">Portfolio</a></li>
						<li class="m-0 w-full float-left"><a class="text-[#767676] inline-block font-medium font-montserrat transition-all duration-300 hover:text-black" href="#news">Events</a></li>
						<li class="m-0 w-full float-left"><a class="text-[#767676] inline-block font-medium font-montserrat transition-all duration-300 hover:text-black" href="#contact">Contact</a></li>
					</ul>
				</div>
				<div class="copyright w-full float-left">
					<p class="text-[15px] text-[#999] font-montserrat leading-[25px]">&copy; 2026 Dipty<br>Created by dtrixithub.com <a class="text-[#787878] font-medium transition-all duration-300 hover:text-black" href="https://themeforest.net/user/dtrix" target="_blank"><dtrixithub class="com"></dtrixithub></a></p>
				</div>
			</div>
		</div>
		<!-- /LEFTPART -->

		<!-- RIGHTPART -->
		<div class="rightpart w-full min-h-[100vh] float-left relative bg-[#f8f8f8] pl-[450px]">
			<div class="rightpart_in relative w-full float-left clear-both border-solid border-[#ebebeb] border-l min-h-[100vh]">

				<!-- HOME -->
				<div id="home" class="tokyo_tm_section animated">
					<div class="container">
						<div class="tokyo_tm_home w-full min-h-[100vh] clear-both flex items-center justify-center relative">
							<div class="home_content flex items-center">
								<div class="avatar min-w-[300px] min-h-[300px] relative rounded-full" data-type="wave"> <!-- data-type values are: "wave", "circle", "square"-->
									<div class="image absolute inset-0 bg-no-repeat bg-center bg-cover" data-img-url="{{ asset('assets/img/slider/profile.png.jpg') }}"></div>
								</div>
								<div class="details ml-[80px]">
									<h3 class="name text-[55px] font-extrabold uppercase mb-[14px]">Fahima <span>Dipty</span></h3>
									<p class="job font-montserrat font-medium max-w-[450px] mb-[25px]">COO | Business Consultant | Branding & Design | Digital Strategist | Digital Marketing | Finance & Budget Analysis | Budget Planning & Optimization | Tech Team Leadership | Project Management | Client Relations | Graphic & UI/UX Design | E-Commerce Strategy | Social Media Management | Content Creation & Marketing | Research & Development | Event & Program Management | Product Sourcing & Procurement | Risk Management | Strategic Planning | Innovation & Process Improvement | Leadership & Mentoring.</p>
									<div class="social w-full float-left">
										<ul class="m-0 list-none" style="display:flex;align-items:center;justify-content:center">
											<li class="mr-[8px] inline-block"><a class="text-black text-[20px] transition-all duration-300 hover:text-black" href="https://share.google/8ctEBlSOQhXKElUFf"><i class="icon-linkedin-squared"></i></a></li>
											<li class="mr-[8px] inline-block"><a class="text-black text-[20px] transition-all duration-300 hover:text-black" href="https://www.behance.net/designerdipty"><i class="icon-behance-squared"></i></a></li>
											<li class="mr-[8px] inline-block"><a class="text-black text-[20px] transition-all duration-300 hover:text-black" href="https://www.facebook.com/share/17EcNMf17T/?mibextid=wwXIfr"><i class="icon-facebook-squared"></i></a></li>
											<li class="mr-[8px] inline-block"><a class="text-black text-[20px] transition-all duration-300 hover:text-black" href="https://www.fiverr.com/designer_prita">
												<svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 50 50" style="height:20px;width:20px" width="20px" height="20px"><path d="M25,2C12.32,2,2,12.32,2,25s10.32,23,23,23s23-10.32,23-23S37.68,2,25,2z M34,36h-6V25h-4v11h-6V25h-4v-6h4.04 c0.37-4.96,3.54-8,8.46-8h2.53v6H26.5c-0.92,0-2.14,0-2.43,2H34V36z"/></svg>
											</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /HOME -->

				<!-- ABOUT -->
				<div id="about" class="tokyo_tm_section">
					<div class="container">
						<div class="tokyo_tm_about w-full h-auto clear-both float-left py-[100px] px-0">
							<div class="tokyo_tm_title w-full h-auto clear-both float-left mb-[62px]">
								<div class="title_flex w-full h-auto clear-both flex justify-between items-end">
									<div class="left">
										<span class="inline-block bg-[rgba(0,0,0,.04)] uppercase py-[4px] px-[10px] font-semibold text-[12px] text-[#333] font-montserrat tracking-[0px] mb-[11px]">About</span>
										<h3 class="font-extrabold font-montserrat">About Me</h3>
									</div>
								</div>
							</div>
							<div class="top_author_image w-full h-auto clear-both float-left relative mb-[35px]">
								<img class="min-w-full" src="{{ asset('assets/img/slider/about.jpg.jpg') }}" alt="" />
							</div>
							<div class="about_title w-full h-auto clear-both float-left border-solid border-[#DFDFDF] border-b pb-[20px] mb-[30px]">
								<h3 class="text-[22px] font-bold">Fahima Dipty</h3>
								<span>COO & Business Consultant</span>
							</div>
							<div class="about_text w-full h-auto clear-both float-left border-solid border-[#DFDFDF] border-b pb-[31px] mb-[30px]">
								<p class="mb-[11px] text-justify">Hi, I’m Fahima Dipty, a passionate business consultant, creative designer, and digital strategist. Over the years, I’ve built a career that blends creativity, strategy, and operational expertise, helping businesses, teams, and individuals achieve meaningful results.
As the COO of Rafusoft, I lead software development projects from start to finish, managing teams, processes, and client relationships to ensure efficiency, innovation, and quality delivery. I take pride in turning complex challenges into practical, scalable solutions that make a real difference.
Beyond technology, I’ve served as a freelance graphic designer, working with over 5,000 clients worldwide, creating branding, UI/UX design, digital campaigns, and visual content that resonate with audiences. This experience has taught me how to balance creativity with strategy, delivering work that is both beautiful and effective.
I also have a strong background in finance, budget planning, project management, and team leadership, which allows me to approach every project with a holistic, results-driven mindset. I’ve also contributed to education, teaching finance, accounting, and management, helping students understand complex concepts with clarity and confidence.
What drives me is the joy of turning ideas into reality, building experiences and systems that not only work but inspire growth, innovation, and collaboration. Whether it’s managing a team, designing a brand, or crafting a digital strategy, I focus on delivering measurable impact and building lasting partnerships.
When I’m not leading projects or designing solutions, I enjoy exploring emerging technologies, learning new creative tools, and mentoring young professionals who are passionate about business and design.
Let’s create something meaningful together—innovative, visually compelling, and future-ready.</p>
								<p>One of my specialties is taking an idea from scratch and creating a full-fledged platform. I go beyond to produce sites with a unique, outstanding, contemporary look-and-feel. With extensive knowledge of web mechanics, I’m able to optimize complex integrations to require little-to-no maintenance while running on their own for years.</p>
							</div>
							<div class="dipty_tm_short_info w-full h-auto clear-both float-left flex border-solid border-[#DFDFDF] border-b pb-[30px] mb-[40px]">
								<div class="left w-1/2 pr-[50px]">
									<div class="tokyo_tm_info w-full h-auto clear-both float-left">
										<ul class="m-0 list-none">
											<li class="m-0"><span class="min-w-[100px] float-left mr-[10px] font-bold text-black">Birthday:</span><span>17.08.1998</span></li>
											<li class="m-0"><span class="min-w-[100px] float-left mr-[10px] font-bold text-black">Age:</span><span>27</span></li>
											<li class="m-0"><span class="min-w-[100px] float-left mr-[10px] font-bold text-black">Address:</span><span>Dhanmondi, Dhaka, Bangladesh</span></li>
											<li class="m-0"><span class="min-w-[100px] float-left mr-[10px] font-bold text-black">Email:</span><span><a class="text-[#767676] transition-all duration-300 hover:text-black" href="mailto:tokyo@gmail.com">dipty@rafusoft.com</a></span></li>
											<li class="m-0"><span class="min-w-[100px] float-left mr-[10px] font-bold text-black">Phone:</span><span><a class="text-[#767676] transition-all duration-300 hover:text-black" href="tel:+77 022 177 05 05">+8801730974804</a></span></li>
										</ul>
									</div>
								</div>
								<div class="right w-1/2 pl-[50px]">
									<div class="tokyo_tm_info">
                                        <ul class="m-0 list-none">
											<li class="m-0"><span class="min-w-[100px] float-left mr-[10px] font-bold text-black">Nationality:</span><span>Bangladeshi</span></li>
											<li class="m-0"><span class="min-w-[100px] float-left mr-[10px] font-bold text-black">Study:</span><span>University Of Dhaka</span></li>
											<li class="m-0"><span class="min-w-[100px] float-left mr-[10px] font-bold text-black">Degree:</span><span>Executive MBA</span></li>
                                            <li class="m-0"><span class="min-w-[100px] float-left mr-[10px] font-bold text-black">Interest:</span><span>Creativity, Strategy and Innovation</span></li>
											<li class="m-0"><span class="min-w-[100px] float-left mr-[10px] font-bold text-black">Freelance:</span><span>Available</span></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="tokyo_tm_button" data-position="left">
								<a href="{{ asset('assets/pdf/Fahima Akter CV.pdf') }}" download>
									<span>Download CV</span>
								</a>
							</div>
						</div>
					</div>	
					<div class="tokyo_tm_progressbox w-full h-auto clear-both float-left bg-white pt-[93px] pr-[0px] pb-[100px] pl-[0px]">
						<div class="container">
							<div class="in w-full h-auto clear-both float-left flex">
								<div class="left w-1/2 pr-[50px]">
									<div class="tokyo_section_title w-full h-auto clear-both float-left mb-[40px]">
										<h3 class="text-[20px] font-bold">Skills – Fahima Dipty</h3>
									</div>
									<div class="tokyo_progress">
										<div class="progress_inner" data-value="95">
											<span><span class="label">Business Consulting</span><span class="number">95%</span></span>
											<div class="background"><div class="bar"><div class="bar_in"></div></div></div>
										</div>
										<div class="progress_inner" data-value="80" >
											<span><span class="label">Project Management</span><span class="number">93%</span></span>
											<div class="background"><div class="bar"><div class="bar_in"></div></div></div>
										</div>
										<div class="progress_inner" data-value="90">
											<span><span class="label">Branding & Design</span><span class="number">98%</span></span>
											<div class="background"><div class="bar"><div class="bar_in"></div></div></div>
										</div>
										<div class="progress_inner" data-value="80" >
											<span><span class="label">Project Management</span><span class="number">93%</span></span>
											<div class="background"><div class="bar"><div class="bar_in"></div></div></div>
										</div>
										<div class="progress_inner" data-value="80" >
											<span><span class="label">UI/UX Design</span><span class="number">87%</span></span>
											<div class="background"><div class="bar"><div class="bar_in"></div></div></div>
										</div>
										<div class="progress_inner" data-value="80" >
											<span><span class="label">Graphic Design (Adobe Suite)</span><span class="number">98%</span></span>
											<div class="background"><div class="bar"><div class="bar_in"></div></div></div>
										</div>
										<div class="progress_inner" data-value="80" >
											<span><span class="label">Digital Marketing</span><span class="number">94%</span></span>
											<div class="background"><div class="bar"><div class="bar_in"></div></div></div>
										</div>
										<div class="progress_inner" data-value="80" >
											<span><span class="label">Social Media Strategy & Management</span><span class="number">99%</span></span>
											<div class="background"><div class="bar"><div class="bar_in"></div></div></div>
										</div>
										<div class="progress_inner" data-value="80" >
											<span><span class="label">Content Creation & Marketing</span><span class="number">89%</span></span>
											<div class="background"><div class="bar"><div class="bar_in"></div></div></div>
											</div>
										<div class="progress_inner" data-value="80" >
											<span><span class="label">Finance & Budget Analysis</span><span class="number">94%</span></span>
											<div class="background"><div class="bar"><div class="bar_in"></div></div></div>
												</div>
										<div class="progress_inner" data-value="80" >
											<span><span class="label">Budget Planning & Optimization</span><span class="number">99%</span></span>
											<div class="background"><div class="bar"><div class="bar_in"></div></div></div>
												</div>
										<div class="progress_inner" data-value="80" >
											<span><span class="label">Finance & Budget Analysis</span><span class="number">94%</span></span>
											<div class="background"><div class="bar"><div class="bar_in"></div></div></div>
												</div>

										
									</div>
								</div>
								<div class="right w-1/2 pl-[50px]">
									<div class="tokyo_section_title w-full h-auto clear-both float-left mb-[40px]" style="margin-bottom: 65px;">
										<h3 class="text-[20px] font-bold"></h3>
									</div>
									<div class="tokyo_progress">
												
										<div class="progress_inner" data-value="80" >
											<span><span class="label">Tech Team Leadership</span><span class="number">92%</span></span>
											<div class="background"><div class="bar"><div class="bar_in"></div></div></div>
												</div>
										<div class="progress_inner" data-value="80" >
											<span><span class="label">E-Commerce Strategy</span><span class="number">97%</span></span>
											<div class="background"><div class="bar"><div class="bar_in"></div></div></div>
												</div>
										<div class="progress_inner" data-value="80" >
											<span><span class="label">Event & Program Management</span><span class="number">94%</span></span>
											<div class="background"><div class="bar"><div class="bar_in"></div></div></div>
												</div>
										<div class="progress_inner" data-value="80" >
											<span><span class="label">Research & Development (R&D)</span><span class="number">92%</span></span>
											<div class="background"><div class="bar"><div class="bar_in"></div></div></div>
											</div>
										<div class="progress_inner" data-value="80" >
											<span><span class="label">Product Sourcing & Procurement</span><span class="number">92%</span></span>
											<div class="background"><div class="bar"><div class="bar_in"></div></div></div>
											</div>
										<div class="progress_inner" data-value="80" >
											<span><span class="label">Strategic Planning & Problem Solving</span><span class="number">92%</span></span>
											<div class="background"><div class="bar"><div class="bar_in"></div></div></div>
											</div>
										<div class="progress_inner" data-value="80" >
											<span><span class="label">Innovation & Process Improvement</span><span class="number">92%</span></span>
											<div class="background"><div class="bar"><div class="bar_in"></div></div></div>
												</div>
										<div class="progress_inner" data-value="80" >
											<span><span class="label">Leadership & Mentoring</span><span class="number">92%</span></span>
											<div class="background"><div class="bar"><div class="bar_in"></div></div></div>
												</div>
										<div class="progress_inner" data-value="80" >
											<span><span class="label">Risk Management</span><span class="number">92%</span></span>
											<div class="background"><div class="bar"><div class="bar_in"></div></div></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="tokyo_tm_progressbox w-full h-auto clear-both float-left bg-white pt-[93px] pr-[0px] pb-[100px] pl-[0px]">
						<div class="container">
							<div class="in w-full h-auto clear-both float-left flex">
								<div class="left w-1/2">
									<div class="tokyo_section_title w-full h-auto clear-both float-left mb-[40px]">
										<h3 class="text-[20px] font-bold">Language Skills</h3>
									</div>
									<div class="tokyo_progress">
										<div class="progress_inner" data-value="90">
											<span><span class="label">English</span><span class="number">90%</span></span>
											<div class="background"><div class="bar"><div class="bar_in"></div></div></div>
										</div>
										<div class="progress_inner" data-value="95" >
											<span><span class="label">Bangla</span><span class="number">95%</span></span>
											<div class="background"><div class="bar"><div class="bar_in"></div></div></div>
										</div>
										<div class="progress_inner" data-value="85">
											<span><span class="label">Hindi</span><span class="number">80%</span></span>
											<div class="background"><div class="bar"><div class="bar_in"></div></div></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tokyo_tm_skillbox w-full h-auto clear-both float-left pt-[90px] pr-[0px] pb-[90px] pl-[0px]">
						<div class="container">
							<div class="in w-full h-auto clear-both float-left flex">
								<div class="left w-1/2 pr-[50px]">
									<div class="tokyo_section_title w-full h-auto clear-both float-left mb-[40px]">
										<h3 class="text-[20px] font-bold">Knowledge</h3>
									</div>
									<div class="tokyo_tm_skill_list w-full h-auto clear-both float-left">
										<ul class="m-0 list-none">
											<li class="m-0 pl-[25px] relative">
												<span><img class="svg text-black w-[10px] h-[10px] absolute left-0 top-1/2 translate-y-[-50%]" src="{{ asset('assets/img/svg/rightarrow.svg') }}" alt="" />Research & Development (R&D)</span>
											</li>
											<li class="m-0 pl-[25px] relative">
												<span><img class="svg text-black w-[10px] h-[10px] absolute left-0 top-1/2 translate-y-[-50%]" src="{{ asset('assets/img/svg/rightarrow.svg') }}" alt="" />Branding & Creative Design</span>
											</li>
											<li class="m-0 pl-[25px] relative">
												<span><img class="svg text-black w-[10px] h-[10px] absolute left-0 top-1/2 translate-y-[-50%]" src="{{ asset('assets/img/svg/rightarrow.svg') }}" alt="" />Project & Team Leadership</span>
											</li>
											<li class="m-0 pl-[25px] relative">
												<span><img class="svg text-black w-[10px] h-[10px] absolute left-0 top-1/2 translate-y-[-50%]" src="{{ asset('assets/img/svg/rightarrow.svg') }}" alt="" />Business Strategy & Consulting</span>
											</li>
											<li class="m-0 pl-[25px] relative">
												<span><img class="svg text-black w-[10px] h-[10px] absolute left-0 top-1/2 translate-y-[-50%]" src="{{ asset('assets/img/svg/rightarrow.svg') }}" alt="" />Finance & Budget Management</span>
											</li>
										</ul>
									</div>
								</div>
								<div class="right w-1/2 pl-[50px]">
									<div class="tokyo_section_title w-full h-auto clear-both float-left mb-[40px]">
										<h3 class="text-[20px] font-bold">Interests</h3>
									</div>
									<div class="tokyo_tm_skill_list w-full h-auto clear-both float-left">
                                        <ul class="m-0 list-none">
											<li class="m-0 pl-[25px] relative">
												<span><img class="svg text-black w-[10px] h-[10px] absolute left-0 top-1/2 translate-y-[-50%]" src="{{ asset('assets/img/svg/rightarrow.svg') }}" alt="" />Entrepreneurship & innovation, learning from global business practices and startups.</span>
											</li>
											<li class="m-0 pl-[25px] relative">
												<span><img class="svg text-black w-[10px] h-[10px] absolute left-0 top-1/2 translate-y-[-50%]" src="{{ asset('assets/img/svg/rightarrow.svg') }}" alt="" />Knowledge Sharing & Education</span>
											</li>
											<li class="m-0 pl-[25px] relative">
												<span><img class="svg text-black w-[10px] h-[10px] absolute left-0 top-1/2 translate-y-[-50%]" src="{{ asset('assets/img/svg/rightarrow.svg') }}" alt="" />Creative Problem Solving</span>
											</li>
											<li class="m-0 pl-[25px] relative">
												<span><img class="svg text-black w-[10px] h-[10px] absolute left-0 top-1/2 translate-y-[-50%]" src="{{ asset('assets/img/svg/rightarrow.svg') }}" alt="" />Custom Website</span>
											</li>
											<li class="m-0 pl-[25px] relative">
												<span><img class="svg text-black w-[10px] h-[10px] absolute left-0 top-1/2 translate-y-[-50%]" src="{{ asset('assets/img/svg/rightarrow.svg') }}" alt="" />Learn Ecommerce</span>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tokyo_tm_resumebox w-full h-auto clear-both float-left bg-white py-[93px] px-0">
						<div class="container">
							<div class="in w-full h-auto clear-both float-left flex">
								<div class="left w-1/2 pr-[50px]">
									<div class="tokyo_section_title w-full h-auto clear-both float-left mb-[40px]">
										<h3 class="text-[20px] font-bold">Education</h3>
									</div>
									<div class="tokyo_tm_resume_list w-full h-auto clear-both float-left">
										<ul class="m-0 list-none relative inline-block pt-[10px]">
											<li class="m-0 w-full float-left relative pl-[20px] pb-[45px]">
												<div class="list_inner  w-full h-auto clear-both float-left relative flex">
													<div class="time w-1/2 pr-[20px]">
														<span class="inline-block py-[5px] px-[25px] bg-[rgba(0,0,0,.05)] rounded-[50px] text-[14px] whitespace-nowrap">2024 - 2026</span>
													</div>
													<div class="place w-1/2 pl-[20px]">
														<h3 class="text-[16px] mb-[2px] font-semibold">University Of Dhaka</h3>
														<span class="text-[14px]">Executive MBA, Service Management & Tourism </span>
													</div>
												</div>
											</li>
                                            <li class="m-0 w-full float-left relative pl-[20px] pb-[45px]">
												<div class="list_inner  w-full h-auto clear-both float-left relative flex">
													<div class="time w-1/2 pr-[20px]">
														<span class="inline-block py-[5px] px-[25px] bg-[rgba(0,0,0,.05)] rounded-[50px] text-[14px] whitespace-nowrap">2018 - 2023</span>
													</div>
													<div class="place w-1/2 pl-[20px]">
														<h3 class="text-[16px] mb-[2px] font-semibold">Dhaka City College</h3>
														<span class="text-[14px]">BBA, Finance & Banking</span>
													</div>
												</div>
											</li>
                                            <li class="m-0 w-full float-left relative pl-[20px]">
												<div class="list_inner  w-full h-auto clear-both float-left relative flex">
													<div class="time w-1/2 pr-[20px]">
														<span class="inline-block py-[5px] px-[25px] bg-[rgba(0,0,0,.05)] rounded-[50px] text-[14px] whitespace-nowrap">2015 - 2017</span>
													</div>
													<div class="place w-1/2 pl-[20px]">
														<h3 class="text-[16px] mb-[2px] font-semibold">Dhaka City College</h3>
														<span class="text-[14px]">HSC, Business Studies</span>
													</div>
												</div>
											</li>
										</ul>
									</div>
								</div>
								<div class="right w-1/2 pl-[50px]">
									<div class="tokyo_section_title w-full h-auto clear-both float-left mb-[40px]">
										<h3 class="text-[20px] font-bold">Experience</h3>
									</div>
                                    <div class="tokyo_tm_resume_list w-full h-auto clear-both float-left">
										<ul class="m-0 list-none relative inline-block pt-[10px]">
											<li class="m-0 w-full float-left relative pl-[20px] pb-[45px]">
												<div class="list_inner  w-full h-auto clear-both float-left relative flex">
													<div class="time w-1/2 pr-[20px]">
														<span class="inline-block py-[5px] px-[25px] bg-[rgba(0,0,0,.05)] rounded-[50px] text-[14px] whitespace-nowrap">(2023 – Present)</span>
													</div>
													<div class="place w-1/2 pl-[20px]">
														<h3 class="text-[16px] mb-[2px] font-semibold">Chief Operating Officer (COO) – Rafusoft</h3>
														<span class="text-[14px]">Leading business operations, managing software and digital projects, coordinating cross-functional teams, overseeing budgets, mitigating risks, and ensuring high-quality client delivery.</span>
													</div>
												</div>
											</li>
                                            <li class="m-0 w-full float-left relative pl-[20px] pb-[45px]">
												<div class="list_inner  w-full h-auto clear-both float-left relative flex">
													<div class="time w-1/2 pr-[20px]">
														<span class="inline-block py-[5px] px-[25px] bg-[rgba(0,0,0,.05)] rounded-[50px] text-[14px] whitespace-nowrap">2022 - 2024</span>
													</div>
													<div class="place w-1/2 pl-[20px]">
														<h3 class="text-[16px] mb-[2px] font-semibold">Junior Consultant – ICT Tower, ICT Division (LEDP Project)</h3>
														<span class="text-[14px]">Managed vendor billing, supported accounting and financial operations, maintained accurate records, and contributed to smooth project closure.</span>
													</div>
												</div>
													</li>
                                            <li class="m-0 w-full float-left relative pl-[20px]">
												<div class="list_inner  w-full h-auto clear-both float-left relative flex">
													<div class="time w-1/2 pr-[20px]">
														<span class="inline-block py-[5px] px-[25px] bg-[rgba(0,0,0,.05)] rounded-[50px] text-[14px] whitespace-nowrap">(2016 – Present)</span>
													</div>
													<div class="place w-1/2 pl-[20px]">
														<h3 class="text-[16px] mb-[2px] font-semibold">Freelance Graphic Designer (Self-Employed)</h3>
														<span class="text-[14px]">Delivered branding, graphic design, and digital content solutions to 5,000+ international clients; managed projects independently with consistent 5-star client satisfaction.</span>
													</div>
												</div>
											</li>
                                            <li class="m-0 w-full float-left relative pl-[20px]">
												<div class="list_inner  w-full h-auto clear-both float-left relative flex">
													<div class="time w-1/2 pr-[20px]">
														<span class="inline-block py-[5px] px-[25px] bg-[rgba(0,0,0,.05)] rounded-[50px] text-[14px] whitespace-nowrap">Feb, 2018 – Jan, 2023</span>
													</div>
													<div class="place w-1/2 pl-[20px]">
														<h3 class="text-[16px] mb-[2px] font-semibold">MABS Coaching Center, Dhaka</h3>
														<span class="text-[14px]">Lecturer – Business Studies</span>
													</div>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tokyo_tm_testimonials w-full h-auto clear-both float-left py-[100px] px-0">
						<div class="container">
							<div class="tokyo_section_title w-full h-auto clear-both float-left mb-[40px]">
                                <h3 class="text-[20px] font-bold">Testimonials</h3>
                            </div>
							<div class="list w-full h-auto clear-both float-left overflow-hidden">
								<ul class="owl-carousel m-0 list-none cursor-e-resize">
									<li>
										<div class="list_inner w-full h-auto clear-both float-left relative">
											<div class="text w-full h-auto clear-both float-left border-solid border-[#E5EDF4] border-2 p-[40px] mb-[30px] relative">
												<p>Beautiful minimalist design and great, fast response with support. Highly recommend. Thanks Dtrix IT Hub</p>
											</div>
											<div class="details w-full h-auto clear-both float-left flex items-center pl-[20px]">
												<div class="image relative w-[60px] h-[60px]">
													<div class="main absolute inset-0 bg-no-repeat bg-cover bg-center rounded-full" data-img-url="{{ asset('assets/img/testimonials/1.jpg') }}"></div>
												</div>
												<div class="info pl-[20px]">
													<h3 class="text-[16px] mb-[2px] font-semibold">Alexander Walker</h3>
													<span class="text-[14px]">Graphic Designer</span>
												</div>
											</div>
										</div>
									</li>
                                    <li>
										<div class="list_inner w-full h-auto clear-both float-left relative">
											<div class="text w-full h-auto clear-both float-left border-solid border-[#E5EDF4] border-2 p-[40px] mb-[30px] relative">
												<p>These people really know what they are doing! Great customer support availability and supperb kindness.</p>
											</div>
											<div class="details w-full h-auto clear-both float-left flex items-center pl-[20px]">
												<div class="image relative w-[60px] h-[60px]">
													<div class="main absolute inset-0 bg-no-repeat bg-cover bg-center rounded-full" data-img-url="{{ asset('assets/img/testimonials/2.jpg') }}"></div>
												</div>
												<div class="info pl-[20px]">
													<h3 class="text-[16px] mb-[2px] font-semibold">Isabelle Smith</h3>
													<span class="text-[14px]">Content Manager</span>
												</div>
											</div>
										</div>
									</li>
                                    <li>
										<div class="list_inner w-full h-auto clear-both float-left relative">
											<div class="text w-full h-auto clear-both float-left border-solid border-[#E5EDF4] border-2 p-[40px] mb-[30px] relative">
												<p>I had a little problem and the support was just awesome to quickly solve the situation. And keep going on.</p>
											</div>
											<div class="details w-full h-auto clear-both float-left flex items-center pl-[20px]">
												<div class="image relative w-[60px] h-[60px]">
													<div class="main absolute inset-0 bg-no-repeat bg-cover bg-center rounded-full" data-img-url="{{ asset('assets/img/testimonials/3.jpg') }}"></div>
												</div>
												<div class="info pl-[20px]">
													<h3 class="text-[16px] mb-[2px] font-semibold">Baraka Clinton</h3>
													<span class="text-[14px]">English Teacher</span>
												</div>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!-- /ABOUT -->
				
				<!-- SERVICE -->
				<div id="service" class="tokyo_tm_section">
					<div class="container">
						<div class="tokyo_tm_services w-full h-auto clear-both float-left py-[100px] px-0">
                            <div class="tokyo_tm_title w-full h-auto clear-both float-left mb-[62px]">
								<div class="title_flex w-full h-auto clear-both flex justify-between items-end">
									<div class="left">
										<span class="inline-block bg-[rgba(0,0,0,.04)] uppercase py-[4px] px-[10px] font-semibold text-[12px] text-[#333] font-montserrat tracking-[0px] mb-[11px]">Services</span>
										<h3 class="font-extrabold font-montserrat">What I Do</h3>
									</div>
								</div>
							</div>
							<div class="list w-full h-auto clear-both float-left">
								<ul class="ml-[-40px] list-none flex flex-wrap">
									<li class="mb-[40px] w-1/3 pl-[40px]">
										<div class="list_inner w-full h-auto clear-both float-left relative border-solid border-[rgba(0,0,0,.1)] border bg-white pt-[45px] pr-[30px] pb-[40px] pl-[30px] transition-all duration-300">
											<span class="number inline-block mb-[25px] relative w-[60px] h-[60px] leading-[60px] text-center rounded-full bg-[rgba(0,0,0,.03)] font-bold text-black font-montserrat transition-all duration-300">01</span>
											<h3 class="title font-bold text-black text-[18px] mb-[15px]">Content Making Service</h3>
											<ul class="text service-points m-0">
												<li>Engaging and high-quality content tailored for social media, websites, and digital marketing platforms.</li>
												<li>Platform-specific content for Facebook, Instagram, LinkedIn, and websites.</li>
												<li>Creative visuals, captions, and storytelling.</li>
												<li>Content designed to drive engagement and conversions.</li>
											</ul>
											<!-- <div class="tokyo_tm_read_more">
												<a href="#"><span>Read More</span></a>
											</div> -->
											<a class="tokyo_tm_full_link" href="#"></a>
											
											<!-- Service Popup Start -->
											<img class="popup_service_image opacity-0 invisible hidden absolute z-[-111]" src="{{ asset('assets/img/news/1.jpg') }}" alt="" />
											<div class="service_hidden_details opacity-0 invisible hidden absolute z-[-111]">
												<div class="service_popup_informations w-full h-auto clear-both float-left">
													<div class="descriptions w-full float-left">
														<p class="mb-[15px]">Dipty is a leading web design agency with an award-winning design team that creates innovative, effective websites that capture your brand, improve your conversion rates, and maximize your revenue to help grow your business and achieve your goals.</p>
														<p class="mb-[15px]">In today’s digital world, your website is the first interaction consumers have with your business. That's why almost 95 percent of a user’s first impression relates to web design. It’s also why web design services can have an immense impact on your company’s bottom line.</p>
														<p>That’s why more companies are not only reevaluating their website’s design but also partnering with Dipty, the web design agency that’s driven more than $2.4 billion in revenue for its clients. With over 50 web design awards under our belt, we're confident we can design a custom website that drives sales for your unique business.</p>
													</div>
												</div>
											</div>
											<!-- /Service Popup End -->
											
										</div>
									</li>
									<li class="mb-[40px] w-1/3 pl-[40px]">
										<div class="list_inner w-full h-auto clear-both float-left relative border-solid border-[rgba(0,0,0,.1)] border bg-white pt-[45px] pr-[30px] pb-[40px] pl-[30px] transition-all duration-300">
											<span class="number inline-block mb-[25px] relative w-[60px] h-[60px] leading-[60px] text-center rounded-full bg-[rgba(0,0,0,.03)] font-bold text-black font-montserrat transition-all duration-300">02</span>
											<h3 class="title font-bold text-black text-[18px] mb-[15px]">Project Management & Support</h3>
											<ul class="text service-points m-0">
												<li>End-to-end project management.</li>
												<li>Dedicated development team support.</li>
												<li>Timeline, milestone & budget management.</li>
												<li>Post-delivery support & maintenance contracts.</li>
											</ul>
											<!-- <div class="tokyo_tm_read_more">
												<a href="#"><span>Read More</span></a>
											</div> -->
											<a class="tokyo_tm_full_link" href="#"></a>
											
											<!-- Service Popup Start -->
											<img class="popup_service_image opacity-0 invisible hidden absolute z-[-111]" src="{{ asset('assets/img/news/2.jpg') }}" alt="" />
											<div class="service_hidden_details opacity-0 invisible hidden absolute z-[-111]">
												<div class="service_popup_informations w-full h-auto clear-both float-left">
													<div class="descriptions w-full float-left">

														<p class="mb-[15px]">Dipty is a leading web design agency with an award-winning design team that creates innovative, effective websites that capture your brand, improve your conversion rates, and maximize your revenue to help grow your business and achieve your goals.</p>

														<p class="mb-[15px]">In today’s digital world, your website is the first interaction consumers have with your business. That's why almost 95 percent of a user’s first impression relates to web design. It’s also why web design services can have an immense impact on your company’s bottom line.</p>
														
														<p>That’s why more companies are not only reevaluating their website’s design but also partnering with Dipty, the web design agency that’s driven more than $2.4 billion in revenue for its clients. With over 50 web design awards under our belt, we're confident we can design a custom website that drives sales for your unique business.</p>
													</div>
												</div>
											</div>
											<!-- /Service Popup End -->
											
										</div>
									</li>
									<li class="mb-[40px] w-1/3 pl-[40px]">
										<div class="list_inner w-full h-auto clear-both float-left relative border-solid border-[rgba(0,0,0,.1)] border bg-white pt-[45px] pr-[30px] pb-[40px] pl-[30px] transition-all duration-300">
											<span class="number inline-block mb-[25px] relative w-[60px] h-[60px] leading-[60px] text-center rounded-full bg-[rgba(0,0,0,.03)] font-bold text-black font-montserrat transition-all duration-300">03</span>
											<h3 class="title font-bold text-black text-[18px] mb-[15px]">Business & IT Consultancy</h3>
											<ul class="text service-points m-0">
												<li>Business process analysis & planning.</li>
												<li>Digital transformation consultancy.</li>
												<li>Software & technology consulting.</li>
												<li>Startup & project planning support.</li>
												<li>Market analysis & system requirement documentation.</li>
											</ul>
											<!-- <div class="tokyo_tm_read_more">
												<a href="#"><span>Read More</span></a>
											</div> -->
											<a class="tokyo_tm_full_link" href="#"></a>
											
											<!-- Service Popup Start -->
											<img class="popup_service_image opacity-0 invisible hidden absolute z-[-111]" src="{{ asset('assets/img/news/3.jpg') }}" alt="" />
											<div class="service_hidden_details opacity-0 invisible hidden absolute z-[-111]">
												<div class="service_popup_informations w-full h-auto clear-both float-left">
													<div class="descriptions w-full float-left">
														<p class="mb-[15px]">Dipty is a leading web design agency with an award-winning design team that creates innovative, effective websites that capture your brand, improve your conversion rates, and maximize your revenue to help grow your business and achieve your goals.</p>
														<p class="mb-[15px]">In today’s digital world, your website is the first interaction consumers have with your business. That's why almost 95 percent of a user’s first impression relates to web design. It’s also why web design services can have an immense impact on your company’s bottom line.</p>
														<p>That’s why more companies are not only reevaluating their website’s design but also partnering with Dipty, the web design agency that’s driven more than $2.4 billion in revenue for its clients. With over 50 web design awards under our belt, we're confident we can design a custom website that drives sales for your unique business.</p>
													</div>
												</div>
											</div>
											<!-- /Service Popup End -->
											
										</div>
									</li>
									<li class="mb-[40px] w-1/3 pl-[40px]">
										<div class="list_inner w-full h-auto clear-both float-left relative border-solid border-[rgba(0,0,0,.1)] border bg-white pt-[45px] pr-[30px] pb-[40px] pl-[30px] transition-all duration-300">
											<span class="number inline-block mb-[25px] relative w-[60px] h-[60px] leading-[60px] text-center rounded-full bg-[rgba(0,0,0,.03)] font-bold text-black font-montserrat transition-all duration-300">04</span>
											<h3 class="title font-bold text-black text-[18px] mb-[15px]">Software Development & IT Solutions</h3>
											<ul class="text service-points m-0">
												<li>Custom web application development.</li>
												<li>Business management systems (ERP, CRM, HRM).</li>
												<li>E-commerce website development.</li>
												<li>SaaS-based platform development.</li>
												<li>API integration & third-party system integration.</li>
												<li>System maintenance & long-term technical support.</li>
											</ul>
											<!-- <div class="tokyo_tm_read_more">
												<a href="#"><span>Read More</span></a>
											</div> -->
											<a class="tokyo_tm_full_link" href="#"></a>
											
											<!-- Service Popup Start -->
											<img class="popup_service_image opacity-0 invisible hidden absolute z-[-111]" src="{{ asset('assets/img/news/4.jpg') }}" alt="" />
											<div class="service_hidden_details opacity-0 invisible hidden absolute z-[-111]">
												<div class="service_popup_informations w-full h-auto clear-both float-left">
													<div class="descriptions w-full float-left">
														<p class="mb-[15px]">Dipty is a leading web design agency with an award-winning design team that creates innovative, effective websites that capture your brand, improve your conversion rates, and maximize your revenue to help grow your business and achieve your goals.</p>
														<p class="mb-[15px]">In today’s digital world, your website is the first interaction consumers have with your business. That's why almost 95 percent of a user’s first impression relates to web design. It’s also why web design services can have an immense impact on your company’s bottom line.</p>
														<p>That’s why more companies are not only reevaluating their website’s design but also partnering with Dipty, the web design agency that’s driven more than $2.4 billion in revenue for its clients. With over 50 web design awards under our belt, we're confident we can design a custom website that drives sales for your unique business.</p>
													</div>
												</div>
											</div>
											<!-- /Service Popup End -->
											
										</div>
									</li>
									<li class="mb-[40px] w-1/3 pl-[40px]">
										<div class="list_inner w-full h-auto clear-both float-left relative border-solid border-[rgba(0,0,0,.1)] border bg-white pt-[45px] pr-[30px] pb-[40px] pl-[30px] transition-all duration-300">
											<span class="number inline-block mb-[25px] relative w-[60px] h-[60px] leading-[60px] text-center rounded-full bg-[rgba(0,0,0,.03)] font-bold text-black font-montserrat transition-all duration-300">05</span>
											<h3 class="title font-bold text-black text-[18px] mb-[15px]">Graphic Design & Branding</h3>
											<ul class="text service-points m-0">
												<li>Logo design & brand identity creation.</li>
												<li>Social media posts, banners & ads design.</li>
												<li>Marketing & promotional materials.</li>
												<li>Business cards, brochures & corporate stationery.</li>
												<li>Creative visuals for digital campaigns.</li>
											</ul>
											<!-- <div class="tokyo_tm_read_more">
												<a href="#"><span>Read More</span></a>
											</div> -->
											<a class="tokyo_tm_full_link" href="#"></a>
											
											<!-- Service Popup Start -->
											<img class="popup_service_image opacity-0 invisible hidden absolute z-[-111]" src="{{ asset('assets/img/news/1.jpg') }}" alt="" />
											<div class="service_hidden_details opacity-0 invisible hidden absolute z-[-111]">
												<div class="service_popup_informations w-full h-auto clear-both float-left">
													<div class="descriptions w-full float-left">
														<p class="mb-[15px]">Dipty is a leading web design agency with an award-winning design team that creates innovative, effective websites that capture your brand, improve your conversion rates, and maximize your revenue to help grow your business and achieve your goals.</p>
														<p class="mb-[15px]">In today’s digital world, your website is the first interaction consumers have with your business. That's why almost 95 percent of a user’s first impression relates to web design. It’s also why web design services can have an immense impact on your company’s bottom line.</p>
														<p>That’s why more companies are not only reevaluating their website’s design but also partnering with Dipty, the web design agency that’s driven more than $2.4 billion in revenue for its clients. With over 50 web design awards under our belt, we're confident we can design a custom website that drives sales for your unique business.</p>
													</div>
												</div>
											</div>
											<!-- /Service Popup End -->
											
										</div>
									</li>
									<li class="mb-[40px] w-1/3 pl-[40px]">
										<div class="list_inner w-full h-auto clear-both float-left relative border-solid border-[rgba(0,0,0,.1)] border bg-white pt-[45px] pr-[30px] pb-[40px] pl-[30px] transition-all duration-300">
											<span class="number inline-block mb-[25px] relative w-[60px] h-[60px] leading-[60px] text-center rounded-full bg-[rgba(0,0,0,.03)] font-bold text-black font-montserrat transition-all duration-300">06</span>
											<h3 class="title font-bold text-black text-[18px] mb-[15px]">Specialized Services</h3>
											<ul class="text service-points m-0">
												<li>Antivirus & cybersecurity solutions.</li>
												<li>OTT platform planning & development.</li>
												<li>Education & learning platform development.</li>
												<li>Event & tourism-tech solution planning.</li>
											</ul>
											<!-- <div class="tokyo_tm_read_more">
												<a href="#"><span>Read More</span></a>
											</div> -->
											<a class="tokyo_tm_full_link" href="#"></a>
											
											<!-- Service Popup Start -->
											<img class="popup_service_image opacity-0 invisible hidden absolute z-[-111]" src="{{ asset('assets/img/news/2.jpg') }}" alt="" />
											<div class="service_hidden_details opacity-0 invisible hidden absolute z-[-111]">
												<div class="service_popup_informations w-full h-auto clear-both float-left">
													<div class="descriptions w-full float-left">
														<p class="mb-[15px]">Dipty is a leading web design agency with an award-winning design team that creates innovative, effective websites that capture your brand, improve your conversion rates, and maximize your revenue to help grow your business and achieve your goals.</p>
														<p class="mb-[15px]">In today’s digital world, your website is the first interaction consumers have with your business. That's why almost 95 percent of a user’s first impression relates to web design. It’s also why web design services can have an immense impact on your company’s bottom line.</p>
														<p>That’s why more companies are not only reevaluating their website’s design but also partnering with Dipty, the web design agency that’s driven more than $2.4 billion in revenue for its clients. With over 50 web design awards under our belt, we're confident we can design a custom website that drives sales for your unique business.</p>
													</div>
												</div>
											</div>
											<!-- /Service Popup End -->
											
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="tokyo_tm_partners w-full h-auto clear-both float-left bg-white py-[100px] px-0">
						<div class="container">
							<div class="tokyo_section_title w-full h-auto clear-both float-left mb-[40px]">
                                <h3 class="text-[20px] font-bold">Partners</h3>
                            </div>
							<div class="partners_inner w-full h-auto clear-both float-left">
								<ul class="mt-[-2px] mr-[-10px] mb-[-2px] ml-[-2px] list-none pt-[2px] float-left pl-[2px]">
									<li class="m-0 float-left w-1/4 border-solid border-[#eee] border-2 text-center h-[145px] leading-[145px] relative mt-[-2px] ml-[-2px] overflow-hidden">
										<div class="list_inner w-full h-full clear-both float-left opacity-50 transition-all duration-300 hover:opacity-100">
											<img  class="max-w-[50%] max-h-[100px] inline-block" src="{{ asset('assets/img/partners/light/1.png') }}" alt="" />
										</div>
									</li>
									<li class="m-0 float-left w-1/4 border-solid border-[#eee] border-2 text-center h-[145px] leading-[145px] relative mt-[-2px] ml-[-2px] overflow-hidden">
										<div class="list_inner w-full h-full clear-both float-left opacity-50 transition-all duration-300 hover:opacity-100">
											<img  class="max-w-[50%] max-h-[100px] inline-block" src="{{ asset('assets/img/partners/light/2.png') }}" alt="" />
										</div>
									</li>
									<li class="m-0 float-left w-1/4 border-solid border-[#eee] border-2 text-center h-[145px] leading-[145px] relative mt-[-2px] ml-[-2px] overflow-hidden">
										<div class="list_inner w-full h-full clear-both float-left opacity-50 transition-all duration-300 hover:opacity-100">
											<img  class="max-w-[50%] max-h-[100px] inline-block" src="{{ asset('assets/img/partners/light/3.png') }}" alt="" />
										</div>
									</li>
									<li class="m-0 float-left w-1/4 border-solid border-[#eee] border-2 text-center h-[145px] leading-[145px] relative mt-[-2px] ml-[-2px] overflow-hidden">
										<div class="list_inner w-full h-full clear-both float-left opacity-50 transition-all duration-300 hover:opacity-100">
											<img  class="max-w-[50%] max-h-[100px] inline-block" src="{{ asset('assets/img/partners/light/4.png') }}" alt="" />
										</div>
									</li>
									<li class="m-0 float-left w-1/4 border-solid border-[#eee] border-2 text-center h-[145px] leading-[145px] relative mt-[-2px] ml-[-2px] overflow-hidden">
										<div class="list_inner w-full h-full clear-both float-left opacity-50 transition-all duration-300 hover:opacity-100">
											<img  class="max-w-[50%] max-h-[100px] inline-block" src="{{ asset('assets/img/partners/light/5.png') }}" alt="" />
										</div>
									</li>
									<li class="m-0 float-left w-1/4 border-solid border-[#eee] border-2 text-center h-[145px] leading-[145px] relative mt-[-2px] ml-[-2px] overflow-hidden">
										<div class="list_inner w-full h-full clear-both float-left opacity-50 transition-all duration-300 hover:opacity-100">
											<img  class="max-w-[50%] max-h-[100px] inline-block" src="{{ asset('assets/img/partners/light/6.png') }}" alt="" />
										</div>
									</li>
									<li class="m-0 float-left w-1/4 border-solid border-[#eee] border-2 text-center h-[145px] leading-[145px] relative mt-[-2px] ml-[-2px] overflow-hidden">
										<div class="list_inner w-full h-full clear-both float-left opacity-50 transition-all duration-300 hover:opacity-100">
											<img  class="max-w-[50%] max-h-[100px] inline-block" src="{{ asset('assets/img/partners/light/7.png') }}" alt="" />
										</div>
									</li>
									<li class="m-0 float-left w-1/4 border-solid border-[#eee] border-2 text-center h-[145px] leading-[145px] relative mt-[-2px] ml-[-2px] overflow-hidden">
										<div class="list_inner w-full h-full clear-both float-left opacity-50 transition-all duration-300 hover:opacity-100">
											<img  class="max-w-[50%] max-h-[100px] inline-block" src="{{ asset('assets/img/partners/light/8.png') }}" alt="" />
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="tokyo_tm_facts w-full h-auto clear-both float-left px-0 pt-[100px] pb-[60px]">
						<div class="container">
							<div class="tokyo_section_title w-full h-auto clear-both float-left mb-[40px]">
                                <h3 class="text-[20px] font-bold">Fun Facts</h3>
                            </div>
							<div class="list w-full h-auto clear-both float-left">
								<ul class="ml-[-40px] list-none">
									<li class="mb-[40px] pl-[40px] w-1/3 float-left">
										<div class="list_inner  w-full h-auto clear-both float-left relative border-solid border-[rgba(0,0,0,.1)] border text-center px-[20px] py-[40px]">
											<h3 class="font-semibold text-[20px] mb-[3px]">777+</h3>
											<span>Projects Completed</span>
										</div>
									</li>
									<li class="mb-[40px] pl-[40px] w-1/3 float-left">
										<div class="list_inner  w-full h-auto clear-both float-left relative border-solid border-[rgba(0,0,0,.1)] border text-center px-[20px] py-[40px]">
											<h3 class="font-semibold text-[20px] mb-[3px]">3K</h3>
											<span>Happy Clients</span>
										</div>
									</li>
									<li class="mb-[40px] pl-[40px] w-1/3 float-left">
										<div class="list_inner  w-full h-auto clear-both float-left relative border-solid border-[rgba(0,0,0,.1)] border text-center px-[20px] py-[40px]">
											<h3 class="font-semibold text-[20px] mb-[3px]">9K+</h3>
											<span>Lines of Code</span>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!-- /SERVICE -->
				
				<div class="tokyo_tm_portfolio_titles"></div>
				<!-- PORTFOLIO -->
				<div id="portfolio" class="tokyo_tm_section">
					<div class="container">
						<div class="tokyo_tm_portfolio w-full h-auto clear-both float-left px-0 pt-[100px] pb-[40px]">
							<div class="tokyo_tm_title w-full h-auto clear-both float-left mb-[62px]">
								<div class="title_flex w-full h-auto clear-both flex justify-between items-end">
									<div class="left">
										<span class="inline-block bg-[rgba(0,0,0,.04)] uppercase py-[4px] px-[10px] font-semibold text-[12px] text-[#333] font-montserrat tracking-[0px] mb-[11px]">Portfolio</span>
										<h3 class="font-extrabold font-montserrat">Portfolio</h3>
									</div>
									<!-- <div class="portfolio_filter">
										<ul class="list-none">
											<li class="mr-[25px] inline-block"><a href="#" class="current text-[#767676] inline-block font-medium font-montserrat transition-all duration-300 hover:text-black" data-filter="*">All</a></li>
											<li class="mr-[25px] inline-block"><a class="text-[#767676] inline-block font-medium font-montserrat transition-all duration-300 hover:text-black" href="#" data-filter=".vimeo">P-1</a></li>
											<li class="mr-[25px] inline-block"><a class="text-[#767676] inline-block font-medium font-montserrat transition-all duration-300 hover:text-black" href="#" data-filter=".youtube">P-2</a></li>
											<li class="mr-[25px] inline-block"><a class="text-[#767676] inline-block font-medium font-montserrat transition-all duration-300 hover:text-black" href="#" data-filter=".soundcloud">P-3</a></li>
											<li class="mr-[25px] inline-block"><a class="text-[#767676] inline-block font-medium font-montserrat transition-all duration-300 hover:text-black" href="#" data-filter=".image">P-4</a></li>
											<li class="inline-block"><a class="text-[#767676] inline-block font-medium font-montserrat transition-all duration-300 hover:text-black" href="#" data-filter=".detail">Detail</a></li>
										</ul>
									</div> -->
								</div>
							</div>
							<div class="list_wrapper w-full h-auto clear-both float-left">
								<ul class="portfolio_list gallery_zoom ml-[-40px] list-none">
									<!-- Portfolio items for 1.png to 11.png -->
								<li class="portfolio mb-[40px] float-left w-1/3 pl-[40px]">
									<div class="inner w-full h-auto clear-both float-left overflow-hidden relative">
										<div class="entry tokyo_tm_portfolio_animation_wrap" data-title="Portfolio 1" data-category="Image">
											<a class="zoom" href="{{ asset('assets/img/portfolio/12.png') }}">
												<img class="opacity-0 min-w-full" src="{{ asset('assets/img/portfolio/12.png') }}" alt="Portfolio 1" />
												<div class="abs_image absolute inset-0 bg-no-repeat bg-cover bg-center transition-all duration-300" data-img-url="{{ asset('assets/img/portfolio/12.png') }}"></div>
											</a>
										</div>
									</div>
								</li>
								<li class="portfolio mb-[40px] float-left w-1/3 pl-[40px]">
									<div class="inner w-full h-auto clear-both float-left overflow-hidden relative">
										<div class="entry tokyo_tm_portfolio_animation_wrap" data-title="Portfolio 2" data-category="Image">
											<a class="zoom" href="{{ asset('assets/img/portfolio/13.png') }}">
												<img class="opacity-0 min-w-full" src="{{ asset('assets/img/portfolio/13.png') }}" alt="Portfolio 2" />
												<div class="abs_image absolute inset-0 bg-no-repeat bg-cover bg-center transition-all duration-300" data-img-url="{{ asset('assets/img/portfolio/13.png') }}"></div>
											</a>
										</div>
									</div>
								</li>
								<li class="portfolio mb-[40px] float-left w-1/3 pl-[40px]">
									<div class="inner w-full h-auto clear-both float-left overflow-hidden relative">
										<div class="entry tokyo_tm_portfolio_animation_wrap" data-title="Portfolio 3" data-category="Image">
											<a class="zoom" href="{{ asset('assets/img/portfolio/14.png') }}">
												<img class="opacity-0 min-w-full" src="{{ asset('assets/img/portfolio/14.png') }}" alt="Portfolio 3" />
												<div class="abs_image absolute inset-0 bg-no-repeat bg-cover bg-center transition-all duration-300" data-img-url="{{ asset('assets/img/portfolio/14.png') }}"></div>
											</a>
										</div>
									</div>
								</li>
								<li class="portfolio mb-[40px] float-left w-1/3 pl-[40px]">
									<div class="inner w-full h-auto clear-both float-left overflow-hidden relative">
										<div class="entry tokyo_tm_portfolio_animation_wrap" data-title="Portfolio 4" data-category="Image">
											<a class="zoom" href="{{ asset('assets/img/portfolio/15.png') }}">
												<img class="opacity-0 min-w-full" src="{{ asset('assets/img/portfolio/15.png') }}" alt="Portfolio 4" />
												<div class="abs_image absolute inset-0 bg-no-repeat bg-cover bg-center transition-all duration-300" data-img-url="{{ asset('assets/img/portfolio/15.png') }}"></div>
											</a>
										</div>
									</div>
								</li>
								<li class="portfolio mb-[40px] float-left w-1/3 pl-[40px]">
									<div class="inner w-full h-auto clear-both float-left overflow-hidden relative">
										<div class="entry tokyo_tm_portfolio_animation_wrap" data-title="Portfolio 5" data-category="Image">
											<a class="zoom" href="{{ asset('assets/img/portfolio/16.png') }}">
												<img class="opacity-0 min-w-full" src="{{ asset('assets/img/portfolio/16.png') }}" alt="Portfolio 5" />
												<div class="abs_image absolute inset-0 bg-no-repeat bg-cover bg-center transition-all duration-300" data-img-url="{{ asset('assets/img/portfolio/16.png') }}"></div>
											</a>
										</div>
									</div>
								</li>
								<li class="portfolio mb-[40px] float-left w-1/3 pl-[40px]">
									<div class="inner w-full h-auto clear-both float-left overflow-hidden relative">
										<div class="entry tokyo_tm_portfolio_animation_wrap" data-title="Portfolio 6" data-category="Image">
											<a class="zoom" href="{{ asset('assets/img/portfolio/17.png') }}">
												<img class="opacity-0 min-w-full" src="{{ asset('assets/img/portfolio/17.png') }}" alt="Portfolio 6" />
												<div class="abs_image absolute inset-0 bg-no-repeat bg-cover bg-center transition-all duration-300" data-img-url="{{ asset('assets/img/portfolio/17.png') }}"></div>
											</a>
										</div>
									</div>
								</li>
								<li class="portfolio mb-[40px] float-left w-1/3 pl-[40px]">
									<div class="inner w-full h-auto clear-both float-left overflow-hidden relative">
										<div class="entry tokyo_tm_portfolio_animation_wrap" data-title="Portfolio 7" data-category="Image">
											<a class="zoom" href="{{ asset('assets/img/portfolio/18.png') }}">
												<img class="opacity-0 min-w-full" src="{{ asset('assets/img/portfolio/18.png') }}" alt="Portfolio 7" />
												<div class="abs_image absolute inset-0 bg-no-repeat bg-cover bg-center transition-all duration-300" data-img-url="{{ asset('assets/img/portfolio/18.png') }}"></div>
											</a>
										</div>
									</div>
								</li>
								<li class="portfolio mb-[40px] float-left w-1/3 pl-[40px]">
									<div class="inner w-full h-auto clear-both float-left overflow-hidden relative">
										<div class="entry tokyo_tm_portfolio_animation_wrap" data-title="Dipty" data-category="Image">
											<a class="zoom" href="{{ asset('assets/img/portfolio/19.png') }}">
												<img class="opacity-0 min-w-full" src="{{ asset('assets/img/portfolio/19.png') }}" alt="Portfolio 8" />
												<div class="abs_image absolute inset-0 bg-no-repeat bg-cover bg-center transition-all duration-300" data-img-url="{{ asset('assets/img/portfolio/19.png') }}"></div>
											</a>
										</div>
									</div>
								</li>
								<li class="portfolio mb-[40px] float-left w-1/3 pl-[40px]">
									<div class="inner w-full h-auto clear-both float-left overflow-hidden relative">
										<div class="entry tokyo_tm_portfolio_animation_wrap" data-title="Dipty" data-category="Image">
											<a class="zoom" href="{{ asset('assets/img/portfolio/20.png') }}">
												<img class="opacity-0 min-w-full" src="{{ asset('assets/img/portfolio/20.png') }}" alt="Portfolio 9" />
												<div class="abs_image absolute inset-0 bg-no-repeat bg-cover bg-center transition-all duration-300" data-img-url="{{ asset('assets/img/portfolio/20.png') }}"></div>
											</a>
										</div>
									</div>
								</li>
								<li class="portfolio mb-[40px] float-left w-1/3 pl-[40px]">
									<div class="inner w-full h-auto clear-both float-left overflow-hidden relative">
										<div class="entry tokyo_tm_portfolio_animation_wrap" data-title="Dipty" data-category="Image">
											<a class="zoom" href="{{ asset('assets/img/portfolio/21.png') }}">
												<img class="opacity-0 min-w-full" src="{{ asset('assets/img/portfolio/21.png') }}" alt="Portfolio 10" />
												<div class="abs_image absolute inset-0 bg-no-repeat bg-cover bg-center transition-all duration-300" data-img-url="{{ asset('assets/img/portfolio/21.png') }}"></div>
											</a>
										</div>
									</div>
								</li>

								<li class="portfolio mb-[40px] float-left w-1/3 pl-[40px]">
									<div class="inner w-full h-auto clear-both float-left overflow-hidden relative">
										<div class="entry tokyo_tm_portfolio_animation_wrap" data-title="Dipty" data-category="Image">
											<a class="zoom" href="{{ asset('assets/img/portfolio/22.png') }}">
												<img class="opacity-0 min-w-full" src="{{ asset('assets/img/portfolio/22.png') }}" alt="Portfolio 10" />
												<div class="abs_image absolute inset-0 bg-no-repeat bg-cover bg-center transition-all duration-300" data-img-url="{{ asset('assets/img/portfolio/22.png') }}"></div>
											</a>
										</div>
									</div>
								</li>
								<li class="portfolio mb-[40px] float-left w-1/3 pl-[40px]">
									<div class="inner w-full h-auto clear-both float-left overflow-hidden relative">
										<div class="entry tokyo_tm_portfolio_animation_wrap" data-title="Dipty" data-category="Image">
											<a class="zoom" href="{{ asset('assets/img/portfolio/23.png') }}">
												<img class="opacity-0 min-w-full" src="{{ asset('assets/img/portfolio/23.png') }}" alt="Portfolio 11" />
												<div class="abs_image absolute inset-0 bg-no-repeat bg-cover bg-center transition-all duration-300" data-img-url="{{ asset('assets/img/portfolio/23.png') }}"></div>
											</a>
										</div>
									</div>
								</li>


								<li class="portfolio mb-[40px] float-left w-1/3 pl-[40px]">
									<div class="inner w-full h-auto clear-both float-left overflow-hidden relative">
										<div class="entry tokyo_tm_portfolio_animation_wrap" data-title="Dipty" data-category="Image">
											<a class="zoom" href="{{ asset('assets/img/portfolio/24.png') }}">
												<img class="opacity-0 min-w-full" src="{{ asset('assets/img/portfolio/24.png') }}" alt="Portfolio 11" />
												<div class="abs_image absolute inset-0 bg-no-repeat bg-cover bg-center transition-all duration-300" data-img-url="{{ asset('assets/img/portfolio/24.png') }}"></div>
											</a>
										</div>
									</div>
								</li>

								<li class="portfolio mb-[40px] float-left w-1/3 pl-[40px]">
									<div class="inner w-full h-auto clear-both float-left overflow-hidden relative">
										<div class="entry tokyo_tm_portfolio_animation_wrap" data-title="Dipty" data-category="Image">
											<a class="zoom" href="{{ asset('assets/img/portfolio/25.png') }}">
												<img class="opacity-0 min-w-full" src="{{ asset('assets/img/portfolio/25.png') }}" alt="Portfolio 11" />
												<div class="abs_image absolute inset-0 bg-no-repeat bg-cover bg-center transition-all duration-300" data-img-url="{{ asset('assets/img/portfolio/25.png') }}"></div>
											</a>
										</div>
									</div>
								</li>


								<li class="portfolio mb-[40px] float-left w-1/3 pl-[40px]">
									<div class="inner w-full h-auto clear-both float-left overflow-hidden relative">
										<div class="entry tokyo_tm_portfolio_animation_wrap" data-title="Dipty" data-category="Image">
											<a class="zoom" href="{{ asset('assets/img/portfolio/26.png') }}">
												<img class="opacity-0 min-w-full" src="{{ asset('assets/img/portfolio/26.png') }}" alt="Portfolio 11" />
												<div class="abs_image absolute inset-0 bg-no-repeat bg-cover bg-center transition-all duration-300" data-img-url="{{ asset('assets/img/portfolio/26.png') }}"></div>
											</a>
										</div>
									</div>
								</li>
								<li class="portfolio mb-[40px] float-left w-1/3 pl-[40px]">
									<div class="inner w-full h-auto clear-both float-left overflow-hidden relative">
										<div class="entry tokyo_tm_portfolio_animation_wrap" data-title="Dipty" data-category="Image">
											<a class="zoom" href="{{ asset('assets/img/portfolio/27.png') }}">
												<img class="opacity-0 min-w-full" src="{{ asset('assets/img/portfolio/27.png') }}" alt="Portfolio 11" />
												<div class="abs_image absolute inset-0 bg-no-repeat bg-cover bg-center transition-all duration-300" data-img-url="{{ asset('assets/img/portfolio/27.png') }}"></div>
											</a>
										</div>
									</div>
								</li>

								<li class="portfolio mb-[40px] float-left w-1/3 pl-[40px]">
									<div class="inner w-full h-auto clear-both float-left overflow-hidden relative">
										<div class="entry tokyo_tm_portfolio_animation_wrap" data-title="Dipty" data-category="Image">
											<a class="zoom" href="{{ asset('assets/img/portfolio/28.png') }}">
												<img class="opacity-0 min-w-full" src="{{ asset('assets/img/portfolio/28.png') }}" alt="Portfolio 11" />
												<div class="abs_image absolute inset-0 bg-no-repeat bg-cover bg-center transition-all duration-300" data-img-url="{{ asset('assets/img/portfolio/28.png') }}"></div>
											</a>
										</div>
									</div>
								</li>

								<li class="portfolio mb-[40px] float-left w-1/3 pl-[40px]">
									<div class="inner w-full h-auto clear-both float-left overflow-hidden relative">
										<div class="entry tokyo_tm_portfolio_animation_wrap" data-title="Dipty" data-category="Image">
											<a class="zoom" href="{{ asset('assets/img/portfolio/29.png') }}">
												<img class="opacity-0 min-w-full" src="{{ asset('assets/img/portfolio/29.png') }}" alt="Portfolio 11" />
												<div class="abs_image absolute inset-0 bg-no-repeat bg-cover bg-center transition-all duration-300" data-img-url="{{ asset('assets/img/portfolio/29.png') }}"></div>
											</a>
										</div>
									</div>
								</li>

								<li class="portfolio mb-[40px] float-left w-1/3 pl-[40px]">
									<div class="inner w-full h-auto clear-both float-left overflow-hidden relative">
										<div class="entry tokyo_tm_portfolio_animation_wrap" data-title="Dipty" data-category="Image">
											<a class="zoom" href="{{ asset('assets/img/portfolio/30.png') }}">
												<img class="opacity-0 min-w-full" src="{{ asset('assets/img/portfolio/30.png') }}" alt="Portfolio 11" />
												<div class="abs_image absolute inset-0 bg-no-repeat bg-cover bg-center transition-all duration-300" data-img-url="{{ asset('assets/img/portfolio/30.png') }}"></div>
											</a>
										</div>
									</div>
								</li>

								<li class="portfolio mb-[40px] float-left w-1/3 pl-[40px]">
									<div class="inner w-full h-auto clear-both float-left overflow-hidden relative">
										<div class="entry tokyo_tm_portfolio_animation_wrap" data-title="Dipty" data-category="Image">
											<a class="zoom" href="{{ asset('assets/img/portfolio/31.png') }}">
												<img class="opacity-0 min-w-full" src="{{ asset('assets/img/portfolio/31.png') }}" alt="Portfolio 11" />
												<div class="abs_image absolute inset-0 bg-no-repeat bg-cover bg-center transition-all duration-300" data-img-url="{{ asset('assets/img/portfolio/31.png') }}"></div>
											</a>
										</div>
									</div>
								</li>

								<li class="portfolio mb-[40px] float-left w-1/3 pl-[40px]">
									<div class="inner w-full h-auto clear-both float-left overflow-hidden relative">
										<div class="entry tokyo_tm_portfolio_animation_wrap" data-title="Dipty" data-category="Image">
											<a class="zoom" href="{{ asset('assets/img/portfolio/32.png') }}">
												<img class="opacity-0 min-w-full" src="{{ asset('assets/img/portfolio/32.png') }}" alt="Portfolio 11" />
												<div class="abs_image absolute inset-0 bg-no-repeat bg-cover bg-center transition-all duration-300" data-img-url="{{ asset('assets/img/portfolio/32.png') }}"></div>
											</a>
										</div>
									</div>
								</li>

								<li class="portfolio mb-[40px] float-left w-1/3 pl-[40px]">
									<div class="inner w-full h-auto clear-both float-left overflow-hidden relative">
										<div class="entry tokyo_tm_portfolio_animation_wrap" data-title="Dipty" data-category="Image">
											<a class="zoom" href="{{ asset('assets/img/portfolio/33.png') }}">
												<img class="opacity-0 min-w-full" src="{{ asset('assets/img/portfolio/33.png') }}" alt="Portfolio 11" />
												<div class="abs_image absolute inset-0 bg-no-repeat bg-cover bg-center transition-all duration-300" data-img-url="{{ asset('assets/img/portfolio/33.png') }}"></div>
											</a>
										</div>
									</div>
								</li>

								<li class="portfolio mb-[40px] float-left w-1/3 pl-[40px]">
									<div class="inner w-full h-auto clear-both float-left overflow-hidden relative">
										<div class="entry tokyo_tm_portfolio_animation_wrap" data-title="Dipty" data-category="Image">
											<a class="zoom" href="{{ asset('assets/img/portfolio/34.png') }}">
												<img class="opacity-0 min-w-full" src="{{ asset('assets/img/portfolio/34.png') }}" alt="Portfolio 11" />
												<div class="abs_image absolute inset-0 bg-no-repeat bg-cover bg-center transition-all duration-300" data-img-url="{{ asset('assets/img/portfolio/34.png') }}"></div>
											</a>
										</div>
									</div>
								</li>

								<li class="portfolio mb-[40px] float-left w-1/3 pl-[40px]">
									<div class="inner w-full h-auto clear-both float-left overflow-hidden relative">
										<div class="entry tokyo_tm_portfolio_animation_wrap" data-title="Dipty" data-category="Image">
											<a class="zoom" href="{{ asset('assets/img/portfolio/35.png') }}">
												<img class="opacity-0 min-w-full" src="{{ asset('assets/img/portfolio/35.png') }}" alt="Portfolio 11" />
												<div class="abs_image absolute inset-0 bg-no-repeat bg-cover bg-center transition-all duration-300" data-img-url="{{ asset('assets/img/portfolio/35.png') }}"></div>
											</a>
										</div>
									</div>
								</li>


								
								</ul>
							</div>
						</div>
					</div>	
				</div>
				<!-- /PORTFOLIO -->

				<!-- NEWS -->
				<div id="news" class="tokyo_tm_section">
					<div class="container">
						<div class="tokyo_tm_news w-full clear-both float-left h-auto pt-[100px] px-0 pb-[45px]">
							<div class="tokyo_tm_title w-full h-auto clear-both float-left mb-[62px]">
								<div class="title_flex w-full h-auto clear-both flex justify-between items-end">
									<div class="left">
										<span class="inline-block bg-[rgba(0,0,0,.04)] uppercase py-[4px] px-[10px] font-semibold text-[12px] text-[#333] font-montserrat tracking-[0px] mb-[11px]">Events</span>
										<h3 class="font-extrabold font-montserrat">Latest Events</h3>
									</div>
								</div>
							</div>
							<ul class="ml-[-50px] list-none">
								<li class="mb-[50px] float-left w-1/2 pl-[50px]">
									<div class="list_inner w-full clear-both float-left h-auto relative">
										<div class="image relative overflow-hidden">
											<img class="min-w-full opacity-0" src="{{ asset('assets/img/thumbs/40-25.jpg') }}" alt="" />
											<div class="main absolute inset-0 bg-no-repeat bg-cover bg-center transition-all duration-300" data-img-url="{{ asset('assets/img/events/13.png') }}"></div>
											<a class="tokyo_tm_full_link" href="#"></a>
										</div>
										<div class="details w-full float-left px-[40px] pt-[30px] pb-[25px] bg-white transition-all duration-300">
											<div class="extra flex items-center justify-between mb-[25px] relative">
												<div class="short">
													<p class="date font-montserrat text-[13px] text-[#767676]">By <a class="text-[#767676] transition-all duration-300 hover:text-black" href="#">Dipty</a> <span class="relative">17 Aug 2025</span></p>
												</div>
											</div>
											<h3 class="title mb-[10px] leading-[1.4]"><a class="text-black text-[18px] font-semibold inline-block transition-all duration-300 hover:text-black" href="#">The Rafusoft Birthday Celebration Event 2025</a></h3>
											<div class="tokyo_tm_read_more">
												<a href="#"><span>Read More</span></a>
											</div>
										</div>
										
										<!-- News Popup Start -->
										<div class="main_content w-full float-left">
											<div class="descriptions w-full float-left">
												<div class="quotebox w-full clear-both float-left h-auto relative pl-[70px] mb-[24px]">
													<div class="icon absolute left-0 top-[5px]">
														<i class="icon-quote-left text-[40px] text-black"></i>
													</div>
													<p class="text-[20px]">On 17 August 2025, the team at Rafusoft came together to celebrate a special day filled with joy, appreciation, and inspiration. The Rafusoft Birthday Celebration Event 2025 was not only a moment of celebration but also an opportunity for the team to reflect on achievements, strengthen relationships, and look ahead toward future innovation.</p>
												</div>
											</div>
										</div>
										<!-- /News Popup End -->
										
									</div>
								</li>
								<li class="mb-[50px] float-left w-1/2 pl-[50px]">
									<div class="list_inner w-full clear-both float-left h-auto relative">
										<div class="image relative overflow-hidden">
											<img class="min-w-full opacity-0" src="{{ asset('assets/img/thumbs/40-25.jpg') }}" alt="" />
											<div class="main absolute inset-0 bg-no-repeat bg-cover bg-center transition-all duration-300" data-img-url="{{ asset('assets/img/events/event1.jpeg') }}"></div>
											<a class="tokyo_tm_full_link" href="#"></a>
										</div>
										<div class="details w-full float-left px-[40px] pt-[30px] pb-[25px] bg-white transition-all duration-300">
											<div class="extra flex items-center justify-between mb-[25px] relative">
												<div class="short">
													<p class="date font-montserrat text-[13px] text-[#767676]">By <a class="text-[#767676] transition-all duration-300 hover:text-black" href="#">Dipty</a> <span class="relative">4 Nov 2025</span></p>
												</div>
											</div>
											<h3 class="title mb-[10px] leading-[1.4]"><a class="text-black text-[18px] font-semibold inline-block transition-all duration-300 hover:text-black" href="#">At Medical College for Women and Hospital, Uttara.</a></h3>
											<div class="tokyo_tm_read_more">
												<a href="#"><span>Read More</span></a>
											</div>
										</div>
										
										<!-- News Popup Start -->
										<div class="main_content w-full float-left">
											<div class="descriptions w-full float-left">
												<p class="bigger text-[#888] text-[20px] mb-[31px]">Honored to Anchor the University Activation Program 2025</p>
												<p class="mb-[22px]">At Medical College for Women and Hospital, Uttara.</p>
												<p class="mb-[22px]">I had the incredible opportunity to serve as the anchor of the University Activation Program (UAP) 2025, organized by the iDEA Project, ICT Division at Medical College for Women and Hospital, Uttara.</p>
												<div class="quotebox w-full clear-both float-left h-auto relative pl-[70px] mb-[24px]">
													<div class="icon absolute left-0 top-[5px]">
														<i class="icon-quote-left text-[40px] text-black"></i>
													</div>
													<p class="text-[20px]">It was truly inspiring to witness the enthusiasm of students as they explored innovation, entrepreneurship, and the vision of building a Smart Bangladesh. &#127775;</p>
												</div>
												<p class="bigger text-[#888] text-[20px] mb-[31px]">The event brought together inspiring leaders, educators, and innovators who shared valuable insights on startup development, idea validation, and the opportunities available through the iDEA initiative.</p>
												<p class="bigger text-[#888] text-[20px] mb-[31px]">A heartfelt thanks to our distinguished guests whose presence made the event truly memorable:</p>
												<ul class="list-disc pl-[22px] bigger text-[#888] text-[20px] mb-[31px]">
													<li class="mb-[6px]">Shafin Rahman Shimanta - Founder &amp; CEO, Oleek NextCorp</li>
													<li class="mb-[6px]">Siddhartho Goushami - Senior Consultant &amp; Team Leader, iDEA Project, ICT Division</li>
													<li class="mb-[6px]">Prof. Dr. Taslima Islam - Vice Principal, Medical College for Women and Hospital</li>
													<li class="mb-[6px]">Brig. Gen. (Retd.) Dr. Md. Momimur Rahman Mamun - Director, Medical College for Women and Hospital</li>
													<li class="mb-[6px]">Prof. Dr. Major (Retd.) Sheikh Firoj Kabir - Principal, Medical College for Women and Hospital</li>
													<li>Murtuza Zulkar Nain Noman - Joint Secretary &amp; Project Director, iDEA Project, ICT Division</li>
												</ul>
												<p class="bigger text-[#888] text-[20px] mb-[31px]">The program featured engaging sessions on startup idea development, innovation strategies, and practical guidance on preparing pitch decks and applying for the iDEA Pre-Seed Grant.</p>
												<p class="bigger text-[#888] text-[20px] mb-[31px]">It was an honor to be the voice of the program and facilitate such an inspiring gathering. Looking forward to more opportunities to connect, engage, and inspire young innovators and future entrepreneurs.</p>
											</div>
										</div>
										<!-- /News Popup End -->
										
									</div>
								</li>
								<li class="mb-[50px] float-left w-1/2 pl-[50px]">
									<div class="list_inner w-full clear-both float-left h-auto relative">
										<div class="image relative overflow-hidden">
											<img class="min-w-full opacity-0" src="{{ asset('assets/img/thumbs/40-25.jpg') }}" alt="" />
											<div class="main absolute inset-0 bg-no-repeat bg-cover bg-center transition-all duration-300" data-img-url="{{ asset('assets/img/events/event2.jpeg') }}"></div>
											<a class="tokyo_tm_full_link" href="#"></a>
										</div>
										<div class="details w-full float-left px-[40px] pt-[30px] pb-[25px] bg-white transition-all duration-300">
											<div class="extra flex items-center justify-between mb-[25px] relative">
												<div class="short">
													<p class="date font-montserrat text-[13px] text-[#767676]">By <a class="text-[#767676] transition-all duration-300 hover:text-black" href="#">Dipty</a> <span class="relative">26 Apr 2025</span></p>
												</div>
											</div>
											<h3 class="title mb-[10px] leading-[1.4]"><a class="text-black text-[18px] font-semibold inline-block transition-all duration-300 hover:text-black" href="#">Executive Roundtable Networking Event at Takumi Restaurant</a></h3>
											<div class="tokyo_tm_read_more">
												<a href="#"><span>Read More</span></a>
											</div>
										</div>
										
										<!-- News Popup Start -->
										<div class="main_content w-full float-left">
											<div class="descriptions w-full float-left">
												<p class="bigger text-[#888] text-[20px] mb-[31px]">Had an amazing time attending the Executive Roundtable Networking Event for CXO leaders at Takumi Restaurant!</p>
												<p class="bigger text-[#888] text-[20px] mb-[31px]">It was a warm, friendly, and inspiring gathering where I had the opportunity to meet incredible leaders, exchange ideas, and build meaningful connections. The atmosphere was welcoming, the conversations were engaging, and the experience was truly memorable.</p>
												<p class="bigger text-[#888] text-[20px] mb-[31px]">Sharing a few highlights from the evening—both group and solo shots! Grateful for the insights, connections and positive vibes that made this event so special.</p>
											</div>
										</div>
										<!-- /News Popup End -->
										
									</div>
								</li>
								<li class="mb-[50px] float-left w-1/2 pl-[50px]">
									<div class="list_inner w-full clear-both float-left h-auto relative">
										<div class="image relative overflow-hidden">
											<img class="min-w-full opacity-0" src="{{ asset('assets/img/thumbs/40-25.jpg') }}" alt="" />
											<div class="main absolute inset-0 bg-no-repeat bg-cover bg-center transition-all duration-300" data-img-url="{{ asset('assets/img/events/event3.jpeg') }}"></div>
											<a class="tokyo_tm_full_link" href="#"></a>
										</div>
										<div class="details w-full float-left px-[40px] pt-[30px] pb-[25px] bg-white transition-all duration-300">
											<div class="extra flex items-center justify-between mb-[25px] relative">
												<div class="short">
													<p class="date font-montserrat text-[13px] text-[#767676]">By <a class="text-[#767676] transition-all duration-300 hover:text-black" href="#">Dipty</a> <span class="relative">03 Nov 2025</span></p>
												</div>
											</div>
											<h3 class="title mb-[10px] leading-[1.4]"><a class="text-black text-[18px] font-semibold inline-block transition-all duration-300 hover:text-black" href="#">University Activation Programme at AIUB, organized by iDEA Project, ICT Division</a></h3>
											<div class="tokyo_tm_read_more">
												<a href="#"><span>Read More</span></a>
											</div>
										</div>
										
										<!-- News Popup Start -->
										<div class="main_content w-full float-left">
											<div class="descriptions w-full float-left">
												<p class="bigger text-[#888] text-[20px] mb-[31px]">It was truly an inspiring day — learning about pitch deck development, the iDEA Pre-Seed Grant, and exploring entrepreneurial ideas through an engaging masterclass and pitching session.</p>
												<div class="quotebox w-full clear-both float-left h-auto relative pl-[70px] mb-[24px]">
													<div class="icon absolute left-0 top-[5px]">
														<i class="icon-quote-left text-[40px] text-black"></i>
													</div>
													<p class="text-[20px]">Grateful to be part of the University Activation Programme at AIUB, organized by iDEA Project, ICT Division under the inspiring theme “Empowering Youth, Building the Nation.”</p>
												</div>
												<p class="bigger text-[#888] text-[20px] mb-[31px]">Loved connecting with passionate students, innovators, and mentors who share the same vision for youth empowerment and innovation.</p>
											</div>
										</div>
										<!-- /News Popup End -->
										
									</div>
								</li>
								<li class="mb-[50px] float-left w-1/2 pl-[50px]">
									<div class="list_inner w-full clear-both float-left h-auto relative">
										<div class="image relative overflow-hidden">
											<img class="min-w-full opacity-0" src="{{ asset('assets/img/thumbs/40-25.jpg') }}" alt="" />
											<div class="main absolute inset-0 bg-no-repeat bg-cover bg-center transition-all duration-300" data-img-url="{{ asset('assets/img/events/1.png') }}"></div>
											<a class="tokyo_tm_full_link" href="#"></a>
										</div>
										<div class="details w-full float-left px-[40px] pt-[30px] pb-[25px] bg-white transition-all duration-300">
											<div class="extra flex items-center justify-between mb-[25px] relative">
												<div class="short">
													<p class="date font-montserrat text-[13px] text-[#767676]">By <a class="text-[#767676] transition-all duration-300 hover:text-black" href="#">Dipty</a> <span class="relative">08 Mar 2020</span></p>
												</div>
											</div>
											<h3 class="title mb-[10px] leading-[1.4]"><a class="text-black text-[18px] font-semibold inline-block transition-all duration-300 hover:text-black" href="#"> Attending the International Women’s Day Program</a></h3>
											<div class="tokyo_tm_read_more">
												<a href="#"><span>Read More</span></a>
											</div>
										</div>
										
										<!-- News Popup Start -->
										<div class="main_content w-full float-left">
											<div class="descriptions w-full float-left">
												<p class="bigger text-[#888] text-[20px] mb-[31px]">I had the wonderful opportunity to attend a special program on International Women’s Day focused on women’s empowerment, awareness, and economic independence. The event featured engaging discussions and inspiring messages about the importance of empowering women in every sphere of life.</p>
												<div class="quotebox w-full clear-both float-left h-auto relative pl-[70px] mb-[24px]">
													<div class="icon absolute left-0 top-[5px]">
														<i class="icon-quote-left text-[40px] text-black"></i>
													</div>
													<p class="text-[20px]">Our startup “স্বাধীন নারী” (Swadhin Nari) was also highlighted, sharing its vision of supporting and uplifting women toward financial independence and self-reliance.</p>
												</div>
												<p class="bigger text-[#888] text-[20px] mb-[31px]">The session, broadcast live on Dhaka FM 90.4 from 4 PM to 5 PM, was insightful and motivating. It was truly inspiring to witness the commitment of so many people to women’s progress and empowerment.</p>
												<p class="bigger text-[#888] text-[20px] mb-[31px]">Grateful to have attended and learned so much!</p>
											</div>
										</div>
										<!-- /News Popup End -->
										
									</div>
								</li>
								<li class="mb-[50px] float-left w-1/2 pl-[50px]">
									<div class="list_inner w-full clear-both float-left h-auto relative">
										<div class="image relative overflow-hidden">
											<img class="min-w-full opacity-0" src="{{ asset('assets/img/thumbs/40-25.jpg') }}" alt="" />
											<div class="main absolute inset-0 bg-no-repeat bg-cover bg-center transition-all duration-300" data-img-url="{{ asset('assets/img/events/2.png') }}"></div>
											<a class="tokyo_tm_full_link" href="#"></a>
										</div>
										<div class="details w-full float-left px-[40px] pt-[30px] pb-[25px] bg-white transition-all duration-300">
											<div class="extra flex items-center justify-between mb-[25px] relative">
												<div class="short">
													<p class="date font-montserrat text-[13px] text-[#767676]">By <a class="text-[#767676] transition-all duration-300 hover:text-black" href="#">Dipty</a> <span class="relative">07 Apr 2025</span></p>
												</div>
											</div>
											<h3 class="title mb-[10px] leading-[1.4]"><a class="text-black text-[18px] font-semibold inline-block transition-all duration-300 hover:text-black" href="#">Bangladesh Startup Connect on 7 April 2025 at the InterContinental Hotel, Dhaka.</a></h3>
											<div class="tokyo_tm_read_more">
												<a href="#"><span>Read More</span></a>
											</div>
										</div>
										
										<!-- News Popup Start -->
										<div class="main_content w-full float-left">
											<div class="descriptions w-full float-left">
												<div class="quotebox w-full clear-both float-left h-auto relative pl-[70px] mb-[24px]">
													<div class="icon absolute left-0 top-[5px]">
														<i class="icon-quote-left text-[40px] text-black"></i>
													</div>
													<p class="text-[20px]">I had the amazing opportunity to attend Bangladesh Startup Connect on 7 April 2025 at the InterContinental Hotel, Dhaka.</p>
												</div>
												<p class="bigger text-[#888] text-[20px] mb-[31px]">The event was a hub of innovation, networking, and entrepreneurship, bringing together startup founders, investors, industry leaders, and ecosystem enablers. It was inspiring to witness the exchange of ideas, explore collaboration opportunities, and learn about the latest trends shaping Bangladesh’s vibrant startup ecosystem.</p>
												<p class="bigger text-[#888] text-[20px] mb-[31px]">Grateful for the insightful sessions, engaging conversations, and the chance to connect with like-minded innovators. Events like these continue to motivate and empower the startup community to grow and make an impact. </p>
											</div>
										</div>
										<!-- /News Popup End -->
										
									</div>
								</li>
								<li class="mb-[50px] float-left w-1/2 pl-[50px]">
									<div class="list_inner w-full clear-both float-left h-auto relative">
										<div class="image relative overflow-hidden">
											<img class="min-w-full opacity-0" src="{{ asset('assets/img/thumbs/40-25.jpg') }}" alt="" />
											<div class="main absolute inset-0 bg-no-repeat bg-cover bg-center transition-all duration-300" data-img-url="{{ asset('assets/img/events/3.png') }}"></div>
											<a class="tokyo_tm_full_link" href="#"></a>
										</div>
										<div class="details w-full float-left px-[40px] pt-[30px] pb-[25px] bg-white transition-all duration-300">
											<div class="extra flex items-center justify-between mb-[25px] relative">
												<div class="short">
													<p class="date font-montserrat text-[13px] text-[#767676]">By <a class="text-[#767676] transition-all duration-300 hover:text-black" href="#">Kevin Stone</a> <span class="relative">2024</span></p>
												</div>
											</div>
											<h3 class="title mb-[10px] leading-[1.4]"><a class="text-black text-[18px] font-semibold inline-block transition-all duration-300 hover:text-black" href="#">4th International Robo Tech Olympiad 2024 – Rafusoft as Sponsor & Judge!</a></h3>
											<div class="tokyo_tm_read_more">
												<a href="#"><span>Read More</span></a>
											</div>
										</div>
										
										<!-- News Popup Start -->
										<div class="main_content w-full float-left">
											<div class="descriptions w-full float-left">
												<p class="bigger text-[#888] text-[20px] mb-[31px]">I had the honor of attending the 4th International Robo Tech Olympiad 2024 as a sponsor and judge representing Rafusoft, organized by Daffodil International University in collaboration with Robo Tech Valley.</p>
												<div class="quotebox w-full clear-both float-left h-auto relative pl-[70px] mb-[24px]">
													<div class="icon absolute left-0 top-[5px]">
														<i class="icon-quote-left text-[40px] text-black"></i>
													</div>
													<p class="text-[20px]">The event showcased incredible innovations and competitive projects in categories like Robo Soccer, Drone Challenge, and more. It was truly inspiring to evaluate the participants’ creativity, technical skills, and problem-solving abilities firsthand.</p>
												</div>
												<p class="bigger text-[#888] text-[20px] mb-[31px]">Congratulations to all participants and winners! 
												Events like these are vital for nurturing innovation, technology, and STEM skills among the next generation. I’m proud that Rafusoft could contribute to this exciting journey. </p>
											</div>
										</div>
										<!-- /News Popup End -->
										
									</div>
								</li>
								<li class="mb-[50px] float-left w-1/2 pl-[50px]">
									<div class="list_inner w-full clear-both float-left h-auto relative">
										<div class="image relative overflow-hidden">
											<img class="min-w-full opacity-0" src="{{ asset('assets/img/thumbs/40-25.jpg') }}" alt="" />
											<div class="main absolute inset-0 bg-no-repeat bg-cover bg-center transition-all duration-300" data-img-url="{{ asset('assets/img/events/4.png') }}"></div>
											<a class="tokyo_tm_full_link" href="#"></a>
										</div>
										<div class="details w-full float-left px-[40px] pt-[30px] pb-[25px] bg-white transition-all duration-300">
											<div class="extra flex items-center justify-between mb-[25px] relative">
												<div class="short">
													<p class="date font-montserrat text-[13px] text-[#767676]">By <a class="text-[#767676] transition-all duration-300 hover:text-black" href="#">Dipty</a> <span class="relative">2 Apr 2023 </span></p>
												</div>
											</div>
											<h3 class="title mb-[10px] leading-[1.4]"><a class="text-black text-[18px] font-semibold inline-block transition-all duration-300 hover:text-black" href="#">Digital Innovation for Gender Equality “আইসিটি ভিশন” program On 2 April 2023</a></h3>
											<div class="tokyo_tm_read_more">
												<a href="#"><span>Read More</span></a>
											</div>
										</div>
										
										<!-- News Popup Start -->
										<div class="main_content w-full float-left">
											<div class="descriptions w-full float-left">
												<div class="quotebox w-full clear-both float-left h-auto relative pl-[70px] mb-[24px]">
													<div class="icon absolute left-0 top-[5px]">
														<i class="icon-quote-left text-[40px] text-black"></i>
													</div>
													<p class="text-[20px]">On 2 April 2023, I had the privilege of attending the “আইসিটি ভিশন” program, featuring a compelling session on “জেন্ডার বৈষম্য নিরসনে ডিজিটাল প্রযুক্তি ও উদ্ভাবন” (Digital Technology & Innovation to Eliminate Gender Inequality).</p>
												</div>
												<p class="bigger text-[#888] text-[20px] mb-[31px]">The event highlighted how technology and innovation can play a crucial role in promoting gender equality, empowering women, and addressing systemic challenges in society. It was inspiring to see experts share actionable insights, innovative solutions, and strategies to leverage ICT for social impact.</p>
												<p class="bigger text-[#888] text-[20px] mb-[31px]">Being part of this program was truly enlightening, reaffirming the importance of integrating digital solutions to create a more inclusive and equitable society.</p>
											</div>
										</div>
										<!-- /News Popup End -->
										
									</div>
								</li>
								<li class="mb-[50px] float-left w-1/2 pl-[50px]">
									<div class="list_inner w-full clear-both float-left h-auto relative">
										<div class="image relative overflow-hidden">
											<img class="min-w-full opacity-0" src="{{ asset('assets/img/thumbs/40-25.jpg') }}" alt="" />
											<div class="main absolute inset-0 bg-no-repeat bg-cover bg-center transition-all duration-300" data-img-url="{{ asset('assets/img/events/5.png') }}"></div>
											<a class="tokyo_tm_full_link" href="#"></a>
										</div>
										<div class="details w-full float-left px-[40px] pt-[30px] pb-[25px] bg-white transition-all duration-300">
											<div class="extra flex items-center justify-between mb-[25px] relative">
												<div class="short">
													<p class="date font-montserrat text-[13px] text-[#767676]">By <a class="text-[#767676] transition-all duration-300 hover:text-black" href="#">Dipty</a> <span class="relative">2024</span></p>
												</div>
											</div>
											<h3 class="title mb-[10px] leading-[1.4]"><a class="text-black text-[18px] font-semibold inline-block transition-all duration-300 hover:text-black" href="#">Launching the Volunteer Engagement Program – Auto Rice Mill</a></h3>
											<div class="tokyo_tm_read_more">
												<a href="#"><span>Read More</span></a>
											</div>
										</div>
										
										<!-- News Popup Start -->
										<div class="main_content w-full float-left">
											<div class="descriptions w-full float-left">
												<div class="quotebox w-full clear-both float-left h-auto relative pl-[70px] mb-[24px]">
													<div class="icon absolute left-0 top-[5px]">
														<i class="icon-quote-left text-[40px] text-black"></i>
													</div>
													<p class="text-[20px]">I had the honor of serving as the main host for the Volunteer Engagement Program, organized in collaboration with Auto Rice Mill and the rice-selling field marketing team under aponn.com. The program officially started in 2024 and aims to empower local sellers, streamline field marketing operations, and create a strong network of volunteers to support sales and community engagement.</p>
												</div>
												<p class="bigger text-[#888] text-[20px] mb-[31px]">As the host, I had the privilege of kick-starting the event, welcoming participants, and guiding them through the program objectives. The event focused on:</p>
												<ul class="mb-[22px] list-disc pl-[22px] bigger text-[20px] text-[#888]">
													<li class="mb-[6px]">Strengthening collaboration among rice sellers and field marketing teams.</li>
													<li class="mb-[6px]">Promoting efficient sales strategies and marketing techniques.</li>
													<li class="mb-[6px]">Encouraging volunteer participation to support sustainable growth and community engagement.</li>
												</ul>
												<p class="bigger text-[#888] text-[20px] mb-[31px]">It was inspiring to see so many dedicated individuals come together with energy, commitment, and enthusiasm for the program. The initiative is not only about sales but also about building a strong, supportive community of entrepreneurs and volunteers. 🌟</p>
												<p class="bigger text-[#888] text-[20px] mb-[31px]">Looking forward to seeing the positive impact this program will bring to local businesses and the community!</p>
											</div>
										</div>
										<!-- /News Popup End -->
										
									</div>
								</li>
								<li class="mb-[50px] float-left w-1/2 pl-[50px]">
									<div class="list_inner w-full clear-both float-left h-auto relative">
										<div class="image relative overflow-hidden">
											<img class="min-w-full opacity-0" src="{{ asset('assets/img/thumbs/40-25.jpg') }}" alt="" />
											<div class="main absolute inset-0 bg-no-repeat bg-cover bg-center transition-all duration-300" data-img-url="{{ asset('assets/img/events/6.png') }}"></div>
											<a class="tokyo_tm_full_link" href="#"></a>
										</div>
										<div class="details w-full float-left px-[40px] pt-[30px] pb-[25px] bg-white transition-all duration-300">
											<div class="extra flex items-center justify-between mb-[25px] relative">
												<div class="short">
													<p class="date font-montserrat text-[13px] text-[#767676]">By <a class="text-[#767676] transition-all duration-300 hover:text-black" href="#">Dipty</a> <span class="relative">26 Apr 2025</span></p>
												</div>
											</div>
											<h3 class="title mb-[10px] leading-[1.4]"><a class="text-black text-[18px] font-semibold inline-block transition-all duration-300 hover:text-black" href="#">Executive Roundtable Networking – 26 April 2025 | Takumi Restaurant</a></h3>
											<div class="tokyo_tm_read_more">
												<a href="#"><span>Read More</span></a>
											</div>
										</div>
										
										<!-- News Popup Start -->
										<div class="main_content w-full float-left">
											<div class="descriptions w-full float-left">
												<div class="quotebox w-full clear-both float-left h-auto relative pl-[70px] mb-[24px]">
													<div class="icon absolute left-0 top-[5px]">
														<i class="icon-quote-left text-[40px] text-black"></i>
													</div>
													<p class="text-[20px]">Had an amazing time at the CXO leaders' networking event! 
													Met incredible leaders, shared ideas, and built meaningful connections across companies.
													Grateful for the team photos, insights, and positive vibes from this inspiring evening. </p>
												</div>
											</div>
										</div>
										<!-- /News Popup End -->
										
									</div>
								</li>
								<li class="mb-[50px] float-left w-1/2 pl-[50px]">
									<div class="list_inner w-full clear-both float-left h-auto relative">
										<div class="image relative overflow-hidden">
											<img class="min-w-full opacity-0" src="{{ asset('assets/img/thumbs/40-25.jpg') }}" alt="" />
											<div class="main absolute inset-0 bg-no-repeat bg-cover bg-center transition-all duration-300" data-img-url="{{ asset('assets/img/events/8.png') }}"></div>
											<a class="tokyo_tm_full_link" href="#"></a>
										</div>
										<div class="details w-full float-left px-[40px] pt-[30px] pb-[25px] bg-white transition-all duration-300">
											<div class="extra flex items-center justify-between mb-[25px] relative">
												<div class="short">
													<p class="date font-montserrat text-[13px] text-[#767676]">By <a class="text-[#767676] transition-all duration-300 hover:text-black" href="#">Dipty</a> <span class="relative">2025</span></p>
												</div>
											</div>
											<h3 class="title mb-[10px] leading-[1.4]"><a class="text-black text-[18px] font-semibold inline-block transition-all duration-300 hover:text-black" href="#"> Launching EduSeeds’ New Products at Dhaka University</a></h3>
											<div class="tokyo_tm_read_more">
												<a href="#"><span>Read More</span></a>
											</div>
										</div>
										
										<!-- News Popup Start -->
										<div class="main_content w-full float-left">
											<div class="descriptions w-full float-left">
												<div class="quotebox w-full clear-both float-left h-auto relative pl-[70px] mb-[24px]">
													<div class="icon absolute left-0 top-[5px]">
														<i class="icon-quote-left text-[40px] text-black"></i>
													</div>
													<p class="text-[20px]">I had the incredible opportunity to lead the presentation and introduce new EduSeeds products at Dhaka University, showcasing innovative solutions designed to empower students and educators.</p>
												</div>
												<p class="bigger text-[#888] text-[20px] mb-[31px]">The session highlighted:</p>
												<ul class="mb-[22px] list-disc pl-[22px] bigger text-[20px] text-[#888]">
													<li class="mb-[6px]">Key features and benefits of the new products.</li>
													<li class="mb-[6px]">How these tools enhance modern learning and skill development.</li>
													<li class="mb-[6px]">Engagement with the audience to gather feedback and insights for improvement.</li>
												</ul>
												<p class="bigger text-[#888] text-[20px] mb-[31px]">It was an inspiring experience to share EduSeeds’ vision and help advance education and innovation at one of Bangladesh’s premier institutions. </p>
											</div>
										</div>
										<!-- /News Popup End -->
										
									</div>
								</li>
								<li class="mb-[50px] float-left w-1/2 pl-[50px]">
									<div class="list_inner w-full clear-both float-left h-auto relative">
										<div class="image relative overflow-hidden">
											<img class="min-w-full opacity-0" src="{{ asset('assets/img/thumbs/40-25.jpg') }}" alt="" />
											<div class="main absolute inset-0 bg-no-repeat bg-cover bg-center transition-all duration-300" data-img-url="{{ asset('assets/img/events/7.png') }}"></div>
											<a class="tokyo_tm_full_link" href="#"></a>
										</div>
										<div class="details w-full float-left px-[40px] pt-[30px] pb-[25px] bg-white transition-all duration-300">
											<div class="extra flex items-center justify-between mb-[25px] relative">
												<div class="short">
													<p class="date font-montserrat text-[13px] text-[#767676]">By <a class="text-[#767676] transition-all duration-300 hover:text-black" href="#">Dipty</a> <span class="relative">2025</span></p>
												</div>
											</div>
											<h3 class="title mb-[10px] leading-[1.4]"><a class="text-black text-[18px] font-semibold inline-block transition-all duration-300 hover:text-black" href="#"> Leading as Chief Operating Officer (COO)  at Rafusoft – rafusoft.com</a></h3>
											<div class="tokyo_tm_read_more">
												<a href="#"><span>Read More</span></a>
											</div>
										</div>
										
										<!-- News Popup Start -->
										<div class="main_content w-full float-left">
											<div class="descriptions w-full float-left">
												<p class="bigger text-[#888] text-[20px] mb-[31px]">I’m proud to serve as the Chief Operating Officer (COO) at Rafusoft, where I work alongside a team of exceptional programmers and innovators dedicated to delivering cutting-edge software solutions.</p>
												<p class="bigger text-[#888] text-[20px] mb-[31px]">At Rafusoft, we embrace collaboration, creativity, and problem-solving, tackling challenges together and driving innovation in every project. It’s inspiring to be part of a team that welcomes ideas, fosters growth, and continually pushes technology's boundaries.</p>
												<p class="bigger text-[#888] text-[20px] mb-[31px]">Grateful to my incredible colleagues for making every day an exciting opportunity to learn and excel! </p>
											</div>
										</div>
										<!-- /News Popup End -->
										
									</div>
								</li>
								<li class="mb-[50px] float-left w-1/2 pl-[50px]">
									<div class="list_inner w-full clear-both float-left h-auto relative">
										<div class="image relative overflow-hidden">
											<img class="min-w-full opacity-0" src="{{ asset('assets/img/thumbs/40-25.jpg') }}" alt="" />
											<div class="main absolute inset-0 bg-no-repeat bg-cover bg-center transition-all duration-300" data-img-url="{{ asset('assets/img/events/9.png') }}"></div>
											<a class="tokyo_tm_full_link" href="#"></a>
										</div>
										<div class="details w-full float-left px-[40px] pt-[30px] pb-[25px] bg-white transition-all duration-300">
											<div class="extra flex items-center justify-between mb-[25px] relative">
												<div class="short">
													<p class="date font-montserrat text-[13px] text-[#767676]">By <a class="text-[#767676] transition-all duration-300 hover:text-black" href="#">Dipty</a> <span class="relative">2025</span></p>
												</div>
											</div>
											<h3 class="title mb-[10px] leading-[1.4]"><a class="text-black text-[18px] font-semibold inline-block transition-all duration-300 hover:text-black" href="#">Presenting on Email & Digital Marketing – Dhaka University | Service Management & Tourism</a></h3>
											<div class="tokyo_tm_read_more">
												<a href="#"><span>Read More</span></a>
											</div>
										</div>
										
										<!-- News Popup Start -->
										<div class="main_content w-full float-left">
											<div class="descriptions w-full float-left">
												<p class="bigger text-[#888] text-[20px] mb-[31px]">I had the privilege to present a session on email marketing and the importance of digital marketing at Dhaka University, under the Service Management and Tourism program.</p>

												<p class="bigger text-[#888] text-[20px] mb-[31px]">The presentation focused on:</p>
												<ul class="mb-[22px] list-disc pl-[22px] bigger text-[20px] text-[#888]">
													<li class="mb-[6px]">Email marketing strategies for effective engagement.</li>
													<li class="mb-[6px]">The critical role of digital marketing in modern business and tourism services.</li>
													<li class="mb-[6px]">How leveraging digital platforms can enhance customer experience, brand visibility, and service management efficiency.</li>
												</ul>
												<p class="mb-[22px] list-disc pl-[22px] bigger text-[20px] text-[#888]">It was inspiring to interact with students, share insights, and discuss practical approaches for integrating digital marketing into real-world business and tourism scenarios.</p>
											</div>
										</div>
										<!-- /News Popup End -->
										
									</div>
								</li>
								<li class="mb-[50px] float-left w-1/2 pl-[50px]">
									<div class="list_inner w-full clear-both float-left h-auto relative">
										<div class="image relative overflow-hidden">
											<img class="min-w-full opacity-0" src="{{ asset('assets/img/thumbs/40-25.jpg') }}" alt="" />
											<div class="main absolute inset-0 bg-no-repeat bg-cover bg-center transition-all duration-300" data-img-url="{{ asset('assets/img/events/10.png') }}"></div>
											<a class="tokyo_tm_full_link" href="#"></a>
										</div>
										<div class="details w-full float-left px-[40px] pt-[30px] pb-[25px] bg-white transition-all duration-300">
											<div class="extra flex items-center justify-between mb-[25px] relative">
												<div class="short">
													<p class="date font-montserrat text-[13px] text-[#767676]">By <a class="text-[#767676] transition-all duration-300 hover:text-black" href="#">Dipty</a> <span class="relative">2025</span></p>
												</div>
											</div>
											<h3 class="title mb-[10px] leading-[1.4]"><a class="text-black text-[18px] font-semibold inline-block transition-all duration-300 hover:text-black" href="#">Grateful Meeting with the Chinese Mechanical Engineering Team – Rafusoft Innovations</a></h3>
											<div class="tokyo_tm_read_more">
												<a href="#"><span>Read More</span></a>
											</div>
										</div>
										
										<!-- News Popup Start -->
										<div class="main_content w-full float-left">
											<div class="descriptions w-full float-left">
												<p class="bigger text-[#888] text-[20px] mb-[31px]">We had an incredible and grateful meeting with our Chinese mechanical engineering team to discuss and showcase Rafusoft’s latest innovations and projects.</p>
												<p class="bigger text-[#888] text-[20px] mb-[31px]">The session was inspiring as we explored new technologies, collaborative opportunities, and cutting-edge solutions. It was a great chance to share ideas, learn from each other, and strengthen our international teamwork and engineering collaboration.</p>
												<p class="bigger text-[#888] text-[20px] mb-[31px]">Truly thankful for the team’s enthusiasm, professionalism, and insights. Excited for the future projects and innovations that will come from this collaboration!</p>
											</div>
										</div>
										<!-- /News Popup End -->
										
									</div>
								</li>
								<li class="mb-[50px] float-left w-1/2 pl-[50px]">
									<div class="list_inner w-full clear-both float-left h-auto relative">
										<div class="image relative overflow-hidden">
											<img class="min-w-full opacity-0" src="{{ asset('assets/img/thumbs/40-25.jpg') }}" alt="" />
											<div class="main absolute inset-0 bg-no-repeat bg-cover bg-center transition-all duration-300" data-img-url="{{ asset('assets/img/events/12.png') }}"></div>
											<a class="tokyo_tm_full_link" href="#"></a>
										</div>
										<div class="details w-full float-left px-[40px] pt-[30px] pb-[25px] bg-white transition-all duration-300">
											<div class="extra flex items-center justify-between mb-[25px] relative">
												<div class="short">
													<p class="date font-montserrat text-[13px] text-[#767676]">By <a class="text-[#767676] transition-all duration-300 hover:text-black" href="#">Dipty</a> <span class="relative">2025</span></p>
												</div>
											</div>
											<h3 class="title mb-[10px] leading-[1.4]"><a class="text-black text-[18px] font-semibold inline-block transition-all duration-300 hover:text-black" href="#">Great to Meet Rekeka Nila from Augmedix Inc.</a></h3>
											<div class="tokyo_tm_read_more">
												<a href="#"><span>Read More</span></a>
											</div>
										</div>
										
										<!-- News Popup Start -->
										<div class="main_content w-full float-left">
											<div class="descriptions w-full float-left">
												<div class="quotebox w-full clear-both float-left h-auto relative pl-[70px] mb-[24px]">
													<div class="icon absolute left-0 top-[5px]">
														<i class="icon-quote-left text-[40px] text-black"></i>
													</div>
													<p class="text-[20px]">Had the pleasure of meeting Rekeka Nila, a representative from Augmedix Inc., during a recent event. It was a wonderful opportunity to connect, exchange ideas, and learn more about the innovative work their company is doing in the healthcare technology sector.</p>
												</div>
												<p class="bigger text-[#888] text-[20px] mb-[31px]">Events like these create valuable spaces for networking, collaboration, and sharing insights across industries. Grateful for the conversation and looking forward to more inspiring interactions in the future.</p>
											</div>
										</div>
										<!-- /News Popup End -->
										
									</div>
								</li>
								
								<li class="mb-[50px] float-left w-1/2 pl-[50px]">
									<div class="list_inner w-full clear-both float-left h-auto relative">
										<div class="image relative overflow-hidden">
											<img class="min-w-full opacity-0" src="{{ asset('assets/img/thumbs/40-25.jpg') }}" alt="" />
											<div class="main absolute inset-0 bg-no-repeat bg-cover bg-center transition-all duration-300" data-img-url="{{ asset('assets/img/events/14.png') }}"></div>
											<a class="tokyo_tm_full_link" href="#"></a>
										</div>
										<div class="details w-full float-left px-[40px] pt-[30px] pb-[25px] bg-white transition-all duration-300">
											<div class="extra flex items-center justify-between mb-[25px] relative">
												<div class="short">
													<p class="date font-montserrat text-[13px] text-[#767676]">By <a class="text-[#767676] transition-all duration-300 hover:text-black" href="#">Dipty</a> <span class="relative">26 Jan 2025</span></p>
												</div>
											</div>
											<h3 class="title mb-[10px] leading-[1.4]"><a class="text-black text-[18px] font-semibold inline-block transition-all duration-300 hover:text-black" href="#">QOVO – Launching a New Era of Innovation On 26 January 2025</a></h3>
											<div class="tokyo_tm_read_more">
												<a href="#"><span>Read More</span></a>
											</div>
										</div>
										
										<!-- News Popup Start -->
										<div class="main_content w-full float-left">
											<div class="descriptions w-full float-left">
												<p class="bigger text-[#888] text-[20px] mb-[31px]">Just because we can't get out and about like we normally would, doesn’t mean we have to stop taking pictures. There’s still plenty you can do, provided you're prepared to use some imagination. Here are a few ideas to keep you shooting until normal life resumes.</p>
												<div class="quotebox w-full clear-both float-left h-auto relative pl-[70px] mb-[24px]">
													<div class="icon absolute left-0 top-[5px]">
														<i class="icon-quote-left text-[40px] text-black"></i>
													</div>
													<p class="text-[20px]">On 26 January 2025, QOVO proudly continues its journey of delivering modern, innovative, and high-quality services. With a commitment to easy, fast, and reliable solutions, QOVO aims to make life simpler and better through technology and innovation.</p>
												</div>
												<p class="bigger text-[#888] text-[20px] mb-[31px]">This is a special moment for our team as we showcase our latest initiatives, products, and services, while connecting with partners, clients, and stakeholders who share our vision.</p>
												<p class="bigger text-[#888] text-[20px] mb-[31px]">At QOVO, we believe in solutions tailored to your needs, leveraging technology to empower individuals, businesses, and communities alike. </p>
												<p class="bigger text-[#888] text-[20px] mb-[31px]">Join us in celebrating this exciting journey and experience the future of smart, efficient services!</p>
											</div>
										</div>
										<!-- /News Popup End -->
										
									</div>
								</li>


								<li class="mb-[50px] float-left w-1/2 pl-[50px]">
									<div class="list_inner w-full clear-both float-left h-auto relative">
										<div class="image relative overflow-hidden">
											<img class="min-w-full opacity-0" src="{{ asset('assets/img/thumbs/40-25.jpg') }}" alt="" />
											<div class="main absolute inset-0 bg-no-repeat bg-cover bg-center transition-all duration-300" data-img-url="{{ asset('assets/img/events/15.jpeg') }}"></div>
											<a class="tokyo_tm_full_link" href="#"></a>
										</div>
										<div class="details w-full float-left px-[40px] pt-[30px] pb-[25px] bg-white transition-all duration-300">
											<div class="extra flex items-center justify-between mb-[25px] relative">
												<div class="short">
													<p class="date font-montserrat text-[13px] text-[#767676]">By <a class="text-[#767676] transition-all duration-300 hover:text-black" href="#">Dipty</a> <span class="relative">24 Jun 2025</span></p>
												</div>
											</div>
											<h3 class="title mb-[10px] leading-[1.4]"><a class="text-black text-[18px] font-semibold inline-block transition-all duration-300 hover:text-black" href="#">Hi-Tech Park Authority, & British Council ICT Division, Bangladesh.</a></h3>
											<div class="tokyo_tm_read_more">
												<a href="#"><span>Read More</span></a>
											</div>
										</div>
										
										<!-- News Popup Start -->
										<div class="main_content w-full float-left">
											<div class="descriptions w-full float-left">
												<p class="bigger text-[#888] text-[20px] mb-[31px]">In 2023, I had the opportunity to attend an important collaborative meeting organized by ICT Division, Bangladesh, Hi-Tech Park Authority, and the British Council.</p>
												<p class="bigger text-[#888] text-[20px] mb-[31px]">The meeting focused on freelancer development, discussing strategies to support freelancers in Bangladesh, including skill development, certification, and recognition. One of the key outcomes was exploring collaboration with the British Council for English language certification and approval, which will help freelancers gain formal recognition and expand their global opportunities.</p>
												<p class="bigger text-[#888] text-[20px] mb-[31px]">It was inspiring to witness the commitment of government bodies and international partners in empowering the freelance community and promoting professional growth in Bangladesh.</p>
											</div>
										</div>
										<!-- /News Popup End -->
										
									</div>
								</li>


								<li class="mb-[50px] float-left w-1/2 pl-[50px]">
									<div class="list_inner w-full clear-both float-left h-auto relative">
										<div class="image relative overflow-hidden">
											<img class="min-w-full opacity-0" src="{{ asset('assets/img/thumbs/40-25.jpg') }}" alt="" />
											<div class="main absolute inset-0 bg-no-repeat bg-cover bg-center transition-all duration-300" data-img-url="{{ asset('assets/img/events/17.jpeg') }}"></div>
											<a class="tokyo_tm_full_link" href="#"></a>
										</div>
										<div class="details w-full float-left px-[40px] pt-[30px] pb-[25px] bg-white transition-all duration-300">
											<div class="extra flex items-center justify-between mb-[25px] relative">
												<div class="short">
													<p class="date font-montserrat text-[13px] text-[#767676]">By <a class="text-[#767676] transition-all duration-300 hover:text-black" href="#">Dipty</a> <span class="relative">2024</span></p>
												</div>
											</div>
											<h3 class="title mb-[10px] leading-[1.4]"><a class="text-black text-[18px] font-semibold inline-block transition-all duration-300 hover:text-black" href="#">2024 | Core Member Meeting on Freelancing Opportunities for NU Graduates – Organized by a2i</a></h3>
											<div class="tokyo_tm_read_more">
												<a href="#"><span>Read More</span></a>
											</div>
										</div>
										
										<!-- News Popup Start -->
										<div class="main_content w-full float-left">
											<div class="descriptions w-full float-left">
												<p class="bigger text-[#888] text-[20px] mb-[31px]">I had the privilege of attending and contributing as a core member to a strategic meeting focused on freelancing opportunities for National University (NU) graduates and students. The session was organized under the EEP (Entrepreneurship and Employment Program) by a2i (Access to Information) Programme.</p>
												
												<p class="bigger text-[#888] text-[20px] mb-[31px]">The meeting aimed to:</p>

												<ul class="mb-[22px] list-disc pl-[22px] bigger text-[20px] text-[#888]">
													<li class="mb-[6px]">Identify pathways for NU students and graduates to enter the freelancing ecosystem</li>
													<li class="mb-[6px]">Explore skill development programs and practical support for freelancers.</li>
													<li class="mb-[6px]">Discuss strategies to enhance employability and income opportunities through digital platforms.</li>
												</ul>

												<p class="bigger text-[#888] text-[20px] mb-[31px]">It was inspiring to collaborate with fellow core members and stakeholders to shape actionable initiatives that empower students and graduates to succeed in freelancing and digital entrepreneurship</p>
											</div>
										</div>
										<!-- /News Popup End -->
										
									</div>
								</li>

								<li class="mb-[50px] float-left w-1/2 pl-[50px]">
									<div class="list_inner w-full clear-both float-left h-auto relative">
										<div class="image relative overflow-hidden">
											<img class="min-w-full opacity-0" src="{{ asset('assets/img/thumbs/40-25.jpg') }}" alt="" />
											<div class="main absolute inset-0 bg-no-repeat bg-cover bg-center transition-all duration-300" data-img-url="{{ asset('assets/img/events/18.jpeg') }}"></div>
											<a class="tokyo_tm_full_link" href="#"></a>
										</div>
										<div class="details w-full float-left px-[40px] pt-[30px] pb-[25px] bg-white transition-all duration-300">
											<div class="extra flex items-center justify-between mb-[25px] relative">
												<div class="short">
													<p class="date font-montserrat text-[13px] text-[#767676]">By <a class="text-[#767676] transition-all duration-300 hover:text-black" href="#">Dipty</a> <span class="relative">05 Apr 2025</span></p>
												</div>
											</div>
											<h3 class="title mb-[10px] leading-[1.4]"><a class="text-black text-[18px] font-semibold inline-block transition-all duration-300 hover:text-black" href="#">Participating as a Freelancer and Entrepreneur – Smart Entrepreneur: Smart Bangladesh</a></h3>
											<div class="tokyo_tm_read_more">
												<a href="#"><span>Read More</span></a>
											</div>
										</div>
										
										<!-- News Popup Start -->
										<div class="main_content w-full float-left">
											<div class="descriptions w-full float-left">
												<p class="bigger text-[#888] text-[20px] mb-[31px]">I had the incredible opportunity to participate in the seminar “Smart Entrepreneur: Smart Bangladesh”, organized by iDEA Foundation and the ICT Division, Bangladesh. It was an enriching experience to present myself as a freelancer and a successful woman entrepreneur, and to engage with distinguished personalities from the industry and government.</p>
												
												<p class="bigger text-[#888] text-[20px] mb-[31px]">Hearing valuable insights from esteemed speakers, including Honorable State Minister Mr. Zunaid Ahmed Palak, MP, was truly inspiring. I am also grateful to Humayun Kabir Sir for providing me the opportunity to be part of this seminar. Being surrounded by familiar and inspiring faces made the event even more meaningful.</p>

												<p class="bigger text-[#888] text-[20px] mb-[31px]">The seminar focused on the importance of entrepreneurs in building a Smart Bangladesh and the key actions required to contribute effectively to this vision.</p>

												<p class="bigger text-[#888] text-[20px] mb-[31px]">It was a proud moment to reflect on the role of women in entrepreneurship and the growing freelancing ecosystem in Bangladesh.</p>
											</div>
										</div>
										<!-- /News Popup End -->
										
									</div>
								</li>
							</ul>
						</div>
					</div>	
				</div>
				<!-- /NEWS -->

				<!-- CONTACT -->
				<div id="contact" class="tokyo_tm_section">
					<div class="container">
						<div class="tokyo_tm_contact w-full float-left clear-both h-auto py-[100px] px-[0px]">
							<div class="tokyo_tm_title w-full h-auto clear-both float-left mb-[62px]">
								<div class="title_flex w-full h-auto clear-both flex justify-between items-end">
									<div class="left">
										<span class="inline-block bg-[rgba(0,0,0,.04)] uppercase py-[4px] px-[10px] font-semibold text-[12px] text-[#333] font-montserrat tracking-[0px] mb-[11px]">Contact</span>
										<h3 class="font-extrabold font-montserrat">Get in Touch</h3>
									</div>
								</div>
							</div>
							<div class="map_wrap w-full float-left clear-both h-auto mb-[50px]">
								<div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="355" id="gmap_canvas" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3649.830137153243!2d90.36204107410305!3d23.82463858592461!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c13a8e3d2eb9%3A0xfa17feddf8930bed!2sHouse%20%23146%2C%20Rd%20No.%202%2C%20Dhaka%201216!5e0!3m2!1sen!2sbd!4v1771792577264!5m2!1sen!2sbd" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://fmovies-online.net/">fmovies</a><br><style>.mapouter{position:relative;text-align:right;height:355px;width:100%;}</style><a href="https://www.embedgooglemap.net/">embedgooglemap.net</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:355px;width:100%;}</style></div></div>

								<!-- Get your API here https://www.embedgooglemap.net -->

							</div>
							<div class="fields w-full float-left clear-both h-auto">
								<form action="{{ route('contact.send') }}" method="post" id="contact-form" class="contact_form php-email-form" autocomplete="off">
                                    @csrf
									<div class="returnmessage" data-success="Your message has been received, We will contact you soon."></div>
									<div class="empty_notice"><span>Please Fill Required Fields</span></div>
									<div class="first w-full float-left">
										<ul class="list-none">
											<li class="w-full mb-[30px] float-left">
												<input id="name" type="text" placeholder="Name" name="name">
											</li>
                                            <li class="w-full mb-[30px] float-left">
												<input id="subject" type="text" placeholder="Subject" name="subject">
											</li>
											<li class="w-full mb-[30px] float-left">
												<input id="email" type="text" placeholder="Email" name="email">
											</li>
										</ul>
									</div>
									<div class="last">
										<textarea id="message" placeholder="Message" name="message"></textarea>
									</div>
									<div class="tokyo_tm_button" data-position="left">
                                        <div class="form-group">
                                            <div class="g-recaptcha" data-sitekey="{{ env('NOCAPTCHA_SITEKEY') }}"></div>
                                            <div class="validate-error" id="err-recaptcha"></div>
                                        </div>
                                        <div class="my-3">
                                            <div class="loading">Loading</div>
                                            <div class="error-message"></div>
                                            <div class="sent-message">Your message has been sent. Thank you!</div>
                                        </div>
										<a id="send" href="#">
											<span>Send Message</span>
										</a>
									</div>

									<!-- If you want to change mail address to yours, please open modal.php and go to line 4 -->

								</form>
							</div>
						</div>
					</div>	
				</div>
				<!-- /CONTACT -->

			</div>
		</div>
		<!-- /RIGHTPART -->

		<!-- CURSOR -->
		<div class="mouse-cursor cursor-outer"></div>
		<div class="mouse-cursor cursor-inner"></div>
		<!-- /CURSOR -->

    </div>
     <!-- /WRAPPER ALL -->

    <!-- SCRIPTS -->
	<script src="{{ asset('assets/js/jquery.js') }}"></script>
	<script src="{{ asset('assets/js/plugins.js') }}"></script>
	<script src="{{ asset('assets/js/init.js') }}"></script>
    <!-- /SCRIPTS -->


    <script>
        document.getElementById('send').addEventListener('click', function(event) {
            debugger;
            event.preventDefault(); // Stop the form from reloading the page

            let valid = true;
            const form = document.getElementById('contact-form');

            // --- 1. CLEAR OLD ERRORS ---
            document.querySelectorAll('.validate-error').forEach(el => el.style.display = 'none');
            document.querySelectorAll('.form-control').forEach(el => el.classList.remove('is-invalid'));
            document.querySelector('.sent-message').style.display = 'none';
            document.querySelector('.error-message').style.display = 'none';

            // --- 2. VALIDATION LOGIC ---
            const recaptchaResponse = grecaptcha.getResponse();

            if (recaptchaResponse.length === 0) {
                document.getElementById('err-recaptcha').innerText = "Please verify that you are not a robot.";
                document.getElementById('err-recaptcha').style.display = "block";
                valid = false;
            }
            // Name Validation
            const name = form.querySelector('input[name="name"]');
            if (name.value.trim() === '') {
                showError(name, 'Please enter your name');
                valid = false;
            }

            // Email Validation
            const email = form.querySelector('input[name="email"]');
            const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; // Simple Regex
            if (!emailPattern.test(email.value.trim())) {
                showError(email, 'Please enter a valid email');
                valid = false;
            }

            // Subject Validation
            const subject = form.querySelector('input[name="subject"]');
            if (subject.value.trim().length < 4) {
                showError(subject, 'Subject must be at least 4 chars');
                valid = false;
            }

            // Message Validation
            const message = form.querySelector('textarea[name="message"]');
            if (message.value.trim() === '') {
                showError(message, 'Please write something for us');
                valid = false;
            }

            // If validation fails, stop here
            if (!valid) return;

            // --- 3. SEND TO BACKEND (AJAX) ---
            document.querySelector('.loading').style.display = 'block';

            const formData = new FormData(form);

            const actionUrl = form.getAttribute('action');

            fetch(actionUrl, {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest', // Tells Laravel it's AJAX
                        'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value // Laravel Token
                    }
                })
                .then(response => {
                    if (response.ok) {
                        return response.text();
                    }
                    throw new Error('Network response was not ok.');
                })
                .then(data => {
                    document.querySelector('.loading').style.display = 'none';
                    if (data.trim() === 'OK') {
                        document.querySelector('.sent-message').style.display = 'block';
                        form.reset(); // Clear the form
                    } else {
                        throw new Error(data);
                    }
                })
                .catch(error => {
                    document.querySelector('.loading').style.display = 'none';
                    const errorDiv = document.querySelector('.error-message');
                    errorDiv.innerHTML = 'Form submission failed: ' + error.message;
                    errorDiv.style.display = 'block';
                });
        });

        // Helper function to show errors
        function showError(input, message) {
            input.classList.add('is-invalid');
            const errorDiv = input.nextElementSibling; // Assumes the .validate-error div is right after input
            if (errorDiv) {
                errorDiv.innerText = message;
                errorDiv.style.display = 'block';
            }
        }
    </script>
</body>

</html>