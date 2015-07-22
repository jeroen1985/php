<?

$page = $_GET['page'];
$entry = $_GET['entry'];

if ($entry > 0){
	if ($entry == 1){
	$postData = array(
			array("id"=>1,"postedBy"=>"Jeroen Stevens","title"=>"Simple web app complaint/question form (with twitter post)","entry"=>"<p>After finishing the multiple Python/Django tutorials it was time to create a simple application. The Django framework is truly great for rapid development. The form tweet application holds a customer service form that captures a short question and some additional variables (department, product and severity). The values are as-is stored in a SQLlite database. Next to that the additional variables are combined into an alphabetical code and together with the question posted on twitter (with the connected account). Therefore the organisation using this application can refer the customer’s question easily to the correct department.</p><p><center><br><img src=\"images/image7.png\"></br><br>[Twitter example]</br></center></p><p><center><br><img src=\"images/image8.png\"></br><br>[Simple form]</br></center></p><p><center><br><img src=\"images/image9.jpeg\"></br><br>[code example]</br></center></p>"),
			);
	
	}elseif ($entry == 2){
	$postData = array(
			array("id"=>2,"postedBy"=>"Jeroen Stevens","title"=>"Review: learning website development with django","entry"=>"<p>The book describes the Django Framework in the perspective of web application development. The theory is explained while creating a social bookmarking tool. There are some small mistakes in the book that I will highlight below (these mistakes are mainly caused by  a different version described in the book). The book is also a few years old; therefore it is important to compare the suggested code with the online documentation of Django. The next topics are described in the book: introduction to Django & getting started, URLs, views, models, templates, session authentication, user registration, security, Ajax, JQuery, Django’s administration interface, RSS feeds, Advanced searching, internationalization, caching, unit testing, deployment. The book is still very useful and can definitely teach you the fundamentals of the Django Framework. The next mistakes should be taken into consideration while following the code examples in the book. When creating models for example on page 33 the maxlength attribute is described incorrectly.</p><center><p style='border-style:solid;margin:4px;'><b>Maxlength=150 should be max_length=150</b></p></center><p>On page 55 Django’s form library is described. It is mentioned that the only difference between older and newer versions (> 1.0) of Django’s forms library is the import call, i.e. ‘from django import forms’ instead of ‘from django import newforms as forms’. In practice there are more implications, see below: In case of checking if a form has errors (for example from a previous login attempt):</p><center><p style='border-style:solid;margin:4px;'><b>{% If form.has_errors %}  should be {%if form.errors %}</b></p></center><p>After an input value has been validated it will become accessible through the self.cleaned_data dictionary. This reference is described incorrectly.</p><center><p style='border-style:solid;margin:4px;'><b>self.clean_data[‘value’] should be self.cleaned_data[‘value’]</b></p></center><p>Cross site request forgery is described in this book, but not mentioned as mandatory while using Form POST data and AJAX POST requests. In the current version of the framework it is mandatory to deal with CSRF; therefore the code examples in the book will display CSRF failures. These code examples need some minor adjustments; there are different approaches to tackle this issue. Please see the next page: <a href='https://docs.djangoproject.com/en/dev/ref/contrib/csrf/' style='color:black'>djangoproject.com</a>.</p>")		
			);		
	}elseif ($entry == 3){
	$postData = array(
			array("id"=>3,"postedBy"=>"Jeroen Stevens","title"=>"Review: writing your first django app","entry"=>"<p>As I am getting more familiar with Python I would like to use this language to create custom web applications. The Django Framework has been suggested to me by a large number of people. The website of this framework (https://www.djangoproject.com/) displays a quick overview of Django’s functionality and an impressive portfolio. In this blog I would like to review the tutorial described on the Django website. The overview of this tutorial can be seen on:https://docs.djangoproject.com/en/1.5/intro/.The first page ‘Django at a Glance’ gives you a quick understanding on how Django works. It describes models, the admin interface, URLs, views and templates. The next step is a quick installation guide for Python and Django. It is described in a way that is easy to comprehend. It is great that all the main types of operating systems are covered. After this the actual tutorial starts. In this tutorial a poll application is created which consist of a public site and an admin site. In part 1 one of this tutorial you will learn how to setup your environment, i.e. creating a project, the development server and a database setup. After the environment (a project) has been setup an application can be created; the differences between these two is clearly described. An application (app) is a web application that holds specific functionality for example a poll. A project is a set of configurations and one or multiple apps for a particular website. One app can also be used in multiple projects. The next steps are adding the app to the project and creating/activating models. The tutorial holds in my opinion enough examples and thorough descriptions of the commands used to catch on quickly. Next to that there is the option to play around in the interactive python shell and explore the database API. In part 2 of the tutorial the admin interface is explained, it almost takes no effort to create the admin interface as this is based on the database model you have created earlier. Next to that some configuration options for the admin site are described which could be handy at one point. A brief introduction about templates is given too; in this case to adjust the admin templates. Django’s way of working is explained, i.e. it will first check if there is a customized template in the project template directory if this is not the case the standard template will be shown. In part 3 the public site is described starting off with views. A view in Django entails specific functions and is then related to specific templates. A view can in this case hold for example a poll question or an overview of polls. Next URLconf files are described to map these functions in a view to an URL. In this case when the visitor goes to the URL the next specific function in the view can be called. The view can then call a template to render the required information to the visitor. Templates and standard error messages are explained next. There is a lot of information in this part of the tutorial and it is very important to review this part well and make sure you feel comfortable with writing views before you continue the tutorial. In part 4 of the tutorial a quick form is created to make voting for our poll possible. This part of the tutorial shows the creation of a simple form and the use of generic views. These generic views can be used to manage simple tasks that are often used in common web applications, e.g. displaying a list of objects. Part 5 is a short introduction of testing; next in part 6 static files are described to customize the look and feel of the application. In this case including a CSS file and a background image. Next there is an advanced tutorial on “how to write reusable apps” and some topic suggestions to explore next. Overall this tutorial is a great starting point to learn Django, but limited and obviously not sufficient to learn the Framework. A next step is required to gain a thorough understanding of the Framework. In my case I started working on a Django book called \“Learning website development with Django\”</P>"),
			);
	}elseif ($entry == 4){
	$postData = array(
			array("id"=>4,"postedBy"=>"Jeroen Stevens","title"=>"Review: Learn Python the hard way, 2nd edition","entry"=>"About a month ago I started working through a python course called “learn python the hard way”, URL: http://learnpythonthehardway.org. I recommend this online book to everyone who wants to learn python or just get an idea of what programming is about. The perspective of object-oriented programming (OOP) is thoroughly explained, but easy to comprehend. The first thing I noticed was the similarity to PHP, especially the code in the first exercises seems pretty similar. The book takes you through the different python statements. It starts off very simple and gets progressively more difficult, applying more and more of your newly learned skills. Every exercise starts with explaining some theory, next there are some code examples. These example have to be coded in python exactly the same way as it is described. I learned the most from exactly rewriting the same code, but more importantly trying to understand what exactly happens. It is very important to make your understanding of every rule explicit, by writing down comments with every rule (this is explained in exercise 2, by using “#”). The extra credit exercises were very helpful, it makes you think about what you’re actually doing and therefore memorizing is a lot easier. What do you learn? Programming basics are covered (variables, strings, printing), editing of files, functions, programming logic, loops, lists, dictionaries, modules, classes, objects, a first project / website. In the end there are a couple of suggestions to continue the usage of python. I am interested in the Django tutorial to build web applications and Scrapy that can be helpful to scrape information from websites and aggregate this information. Django will be the next step in my Python journey. I will keep you guys updated on my progress."),	
			);
	}elseif ($entry == 5){
	$postData = array(
array("id"=>5,"postedBy"=>"Jeroen Stevens","title"=>"OpenSUSE 12.1 + brightness trick","entry"=>"After using OpenSUSE 12.1 for over a month it is safe to say that the OS works great. I ran into one problem while running flash videos on Firefox, the browser kept shutting down on me. This seems a known problem, but the fix doesn’t seem to work for me. To overcome this problem I installed google chrome as this is my favorite browser anyways, the combination of OpenSUSE 12.1 and chrome works like a charm. Overall I am very happy with OpenSUSE, compared to the old version of red hat linux the ease of use definitely improved. The installation of different programs became very easy, as it can easily be done by following a wizard instead of using the shell. Also it is very easy to adjust all the setting within the system settings, and the system is very  open to adjust it exactly to my demands. A neat trick I picked up while trying to create an easy way to increase / decrease the brightness of my screen (First of all the standard “brightness” buttons are not always working. Read some stuff online to make these buttons work, but I found another workaround that works just fine). Within the systems settings there is an application called keyboard. This application makes it possible to create your own keyboard shortcuts. A major advantage here is that you can connect shell code to a key combination. For adjusting the brightness, I set ALT + B and ALT + N to the following commands: ALT + B: xbacklight -inc 20% ALT + N: xbacklight -dec 20% Therefore creating brightness control at the tips of my fingers."),
		);
	}

}else{
	
	switch($page){
		case 1:
			$postData = array(
					array("id"=>1,"postedBy"=>"Jeroen Stevens","title"=>"Simple web app complaint/question form (with twitter post)","entry"=>"<p>After finishing the multiple Python/Django tutorials it was time to create a simple application. The Django framework is truly great for rapid development. The form tweet application holds a customer service form that captures a short question and some additional variables (department, product and severity). The values are as-is stored in a SQLlite database. Next to that the additional variables are combined into an alphabetical code and together with the question posted on twitter (with the connected account). Therefore the organisation using this application can refer the customer’s question easily to the correct department.</p><p><center><br><img src=\"images/image7.png\"></br><br>[Twitter example]</br></center></p><p><center><br><img src=\"images/image8.png\"></br><br>[Simple form]</br></center></p><p><center><br><img src=\"images/image9.jpeg\"></br><br>[code example]</br></center></p>"),
					array("id"=>2,"postedBy"=>"Jeroen Stevens","title"=>"Review: learning website development with django","entry"=>"<p>The book describes the Django Framework in the perspective of web application development. The theory is explained while creating a social bookmarking tool. There are some small mistakes in the book that I will highlight below (these mistakes are mainly caused by  a different version described in the book). The book is also a few years old; therefore it is important to compare the suggested code with the online documentation of Django. The next topics are described in the book: introduction to Django & getting started, URLs, views, models, templates, session authentication, user registration, security, Ajax, JQuery, Django’s administration interface, RSS feeds, Advanced searching, internationalization, caching, unit testing, deployment. The book is still very useful and can definitely teach you the fundamentals of the Django Framework. The next mistakes should be taken into consideration while following the code examples in the book. When creating models for example on page 33 the maxlength attribute is described incorrectly.</p><center><p style='border-style:solid;margin:4px;'><b>Maxlength=150 should be max_length=150</b></p></center><p>On page 55 Django’s form library is described. It is mentioned that the only difference between older and newer versions (> 1.0) of Django’s forms library is the import call, i.e. ‘from django import forms’ instead of ‘from django import newforms as forms’. In practice there are more implications, see below: In case of checking if a form has errors (for example from a previous login attempt):</p><center><p style='border-style:solid;margin:4px;'><b>{% If form.has_errors %}  should be {%if form.errors %}</b></p></center><p>After an input value has been validated it will become accessible through the self.cleaned_data dictionary. This reference is described incorrectly.</p><center><p style='border-style:solid;margin:4px;'><b>self.clean_data[‘value’] should be self.cleaned_data[‘value’]</b></p></center><p>Cross site request forgery is described in this book, but not mentioned as mandatory while using Form POST data and AJAX POST requests. In the current version of the framework it is mandatory to deal with CSRF; therefore the code examples in the book will display CSRF failures. These code examples need some minor adjustments; there are different approaches to tackle this issue. Please see the next page: <a href='https://docs.djangoproject.com/en/dev/ref/contrib/csrf/' style='color:black'>djangoproject.com</a>.</p>")		
					);
		break;
		case 2:
	
		$postData = array(
				array("id"=>3,"postedBy"=>"Jeroen Stevens","title"=>"Review: writing your first django app","entry"=>"<p>As I am getting more familiar with Python I would like to use this language to create custom web applications. The Django Framework has been suggested to me by a large number of people. The website of this framework (https://www.djangoproject.com/) displays a quick overview of Django’s functionality and an impressive portfolio. In this blog I would like to review the tutorial described on the Django website. The overview of this tutorial can be seen on:https://docs.djangoproject.com/en/1.5/intro/.The first page ‘Django at a Glance’ gives you a quick understanding on how Django works. It describes models, the admin interface, URLs, views and templates. The next step is a quick installation guide for Python and Django. It is described in a way that is easy to comprehend. It is great that all the main types of operating systems are covered. After this the actual tutorial starts. In this tutorial a poll application is created which consist of a public site and an admin site. In part 1 one of this tutorial you will learn how to setup your environment, i.e. creating a project, the development server and a database setup. After the environment (a project) has been setup an application can be created; the differences between these two is clearly described. An application (app) is a web application that holds specific functionality for example a poll. A project is a set of configurations and one or multiple apps for a particular website. One app can also be used in multiple projects. The next steps are adding the app to the project and creating/activating models. The tutorial holds in my opinion enough examples and thorough descriptions of the commands used to catch on quickly. Next to that there is the option to play around in the interactive python shell and explore the database API. In part 2 of the tutorial the admin interface is explained, it almost takes no effort to create the admin interface as this is based on the database model you have created earlier. Next to that some configuration options for the admin site are described which could be handy at one point. A brief introduction about templates is given too; in this case to adjust the admin templates. Django’s way of working is explained, i.e. it will first check if there is a customized template in the project template directory if this is not the case the standard template will be shown. In part 3 the public site is described starting off with views. A view in Django entails specific functions and is then related to specific templates. A view can in this case hold for example a poll question or an overview of polls. Next URLconf files are described to map these functions in a view to an URL. In this case when the visitor goes to the URL the next specific function in the view can be called. The view can then call a template to render the required information to the visitor. Templates and standard error messages are explained next. There is a lot of information in this part of the tutorial and it is very important to review this part well and make sure you feel comfortable with writing views before you continue the tutorial. In part 4 of the tutorial a quick form is created to make voting for our poll possible. This part of the tutorial shows the creation of a simple form and the use of generic views. These generic views can be used to manage simple tasks that are often used in common web applications, e.g. displaying a list of objects. Part 5 is a short introduction of testing; next in part 6 static files are described to customize the look and feel of the application. In this case including a CSS file and a background image. Next there is an advanced tutorial on “how to write reusable apps” and some topic suggestions to explore next. Overall this tutorial is a great starting point to learn Django, but limited and obviously not sufficient to learn the Framework. A next step is required to gain a thorough understanding of the Framework. In my case I started working on a Django book called “Learning website development with Django”</P>"),
				array("id"=>4,"postedBy"=>"Jeroen Stevens","title"=>"Review: Learn Python the hard way, 2nd edition","entry"=>"About a month ago I started working through a python course called “learn python the hard way”, URL: http://learnpythonthehardway.org. I recommend this online book to everyone who wants to learn python or just get an idea of what programming is about. The perspective of object-oriented programming (OOP) is thoroughly explained, but easy to comprehend. The first thing I noticed was the similarity to PHP, especially the code in the first exercises seems pretty similar. The book takes you through the different python statements. It starts off very simple and gets progressively more difficult, applying more and more of your newly learned skills. Every exercise starts with explaining some theory, next there are some code examples. These example have to be coded in python exactly the same way as it is described. I learned the most from exactly rewriting the same code, but more importantly trying to understand what exactly happens. It is very important to make your understanding of every rule explicit, by writing down comments with every rule (this is explained in exercise 2, by using “#”). The extra credit exercises were very helpful, it makes you think about what you’re actually doing and therefore memorizing is a lot easier. What do you learn? Programming basics are covered (variables, strings, printing), editing of files, functions, programming logic, loops, lists, dictionaries, modules, classes, objects, a first project / website. In the end there are a couple of suggestions to continue the usage of python. I am interested in the Django tutorial to build web applications and Scrapy that can be helpful to scrape information from websites and aggregate this information. Django will be the next step in my Python journey. I will keep you guys updated on my progress."),
				array("id"=>5,"postedBy"=>"Jeroen Stevens","title"=>"OpenSUSE 12.1 + brightness trick","entry"=>"After using OpenSUSE 12.1 for over a month it is safe to say that the OS works great. I ran into one problem while running flash videos on Firefox, the browser kept shutting down on me. This seems a known problem, but the fix doesn’t seem to work for me. To overcome this problem I installed google chrome as this is my favorite browser anyways, the combination of OpenSUSE 12.1 and chrome works like a charm. Overall I am very happy with OpenSUSE, compared to the old version of red hat linux the ease of use definitely improved. The installation of different programs became very easy, as it can easily be done by following a wizard instead of using the shell. Also it is very easy to adjust all the setting within the system settings, and the system is very  open to adjust it exactly to my demands. A neat trick I picked up while trying to create an easy way to increase / decrease the brightness of my screen (First of all the standard “brightness” buttons are not always working. Read some stuff online to make these buttons work, but I found another workaround that works just fine). Within the systems settings there is an application called keyboard. This application makes it possible to create your own keyboard shortcuts. A major advantage here is that you can connect shell code to a key combination. For adjusting the brightness, I set ALT + B and ALT + N to the following commands: </p><p><br/> ALT + B: xbacklight -inc 20% <br/>ALT + N: xbacklight -dec 20%</br></p><p><br/>Therefore creating brightness control at the tips of my fingers.")
				);
		break;

	}
	
}

echo json_encode($postData);
?>