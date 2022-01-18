<?php 

// General
App::addRoute("GET|POST", "/",										"Main");
App::addRoute("GET|POST", "/payment",						        "Payment");
App::addRoute("GET|POST", "/successCheckout",						"Success");
App::addRoute("GET|POST", "/failedCheckout",						"Failed");
App::addRoute("GET|POST", "/home",									"Home");
App::addRoute("GET|POST", "/ajax/[*:ajax]/[*:action]?/?",			"Ajax"); 
App::addRoute("GET|POST", "/api/[*:api]/[*:action]?/?",				"Api");
App::addRoute("GET|POST", "/cron/[*:action]?/?",					"Cron");
App::addRoute("GET|POST", "/modal/[*:modal]?/?",					"Modal"); 
App::addRoute("GET|POST", "/comments?/?",							"Comments");
App::addRoute("GET|POST", "/search/[*:q]?/?",						"Search");
App::addRoute("GET|POST", "/login?/?",								"Login");
App::addRoute("GET|POST", "/register?/?",							"Register");
App::addRoute("GET|POST", "/forgot-password?/?",					"Recovery");
App::addRoute("GET|POST", "/recovery/[*:hash]?/?",					"PasswordChange");
App::addRoute("GET|POST", "/logout?/?",								"Logout"); 
App::addRoute("GET|POST", "/discovery/[*:type]?/?",					"Discovery"); 
App::addRoute("GET|POST", "/trends?/?",								"Trends");
App::addRoute("GET|POST", "/movie/[*:self]-[i:id]?/?",				"Movie"); 
App::addRoute("GET|POST", "/movie/[*:self]-[i:id]/[i:video]?/?",	"Movie"); 
App::addRoute("GET|POST", "/movies/[*:category]?/?",				"Movies");
App::addRoute("GET|POST", "/movies?/?",								"Movies");
App::addRoute("GET|POST", "/serie/[*:self]-[i:id]?/?",				"Serie"); 
App::addRoute("GET|POST", "/serie/[*:self]-[i:id]-[i:season]-season-[i:episode]-episode/[i:video]?/?",		"Episode");  
App::addRoute("GET|POST", "/serie/[*:self]-[i:id]/[i:season]-season/[i:episode]-episode?/?",		"Episode");  
App::addRoute("GET|POST", "/series/[*:category]?/?",				"Series");
App::addRoute("GET|POST", "/series?/?",								"Series");
App::addRoute("GET|POST", "/actor/[*:self]-[i:id]?/?",				"Actor");
App::addRoute("GET|POST", "/actors?/?",								"Actors");
App::addRoute("GET|POST", "/tv-channel/[*:self]-[i:id]?/?",			"Channel");
App::addRoute("GET|POST", "/tv-channels?/?",						"Channels");
App::addRoute("GET|POST", "/collection/[i:id]?/?",					"Collection");
App::addRoute("GET|POST", "/collections?/?",						"Collections");
App::addRoute("GET|POST", "/discussion/[*:self]-[i:id]?/?",			"Discussion");
App::addRoute("GET|POST", "/discussions?/?",						"Discussions");
App::addRoute("GET|POST", "/category/[*:self]?/?",					"Category");
App::addRoute("GET|POST", "/categories?/?",							"Categories");
App::addRoute("GET|POST", "/profile/[*:username]?/?",				"Profile"); 
App::addRoute("GET|POST", "/notifications?/?",						"Notifications"); 
App::addRoute("GET|POST", "/settings?/?",							"Settings"); 
App::addRoute("GET|POST", "/page/[*:self]?/?",						"Page"); 


App::addRoute("GET|POST", "/sitemap.main.xml?/?", 					"SitemapMain");
App::addRoute("GET|POST", "/sitemap.posts_[i:page].xml?/?", 		"SitemapPosts");
App::addRoute("GET|POST", "/sitemap.episodes_[i:page].xml?/?", 		"SitemapEpisodes");
App::addRoute("GET|POST", "/sitemap.actors_[i:page].xml?/?", 		"SitemapActors");
App::addRoute("GET|POST", "/sitemap.discussions_[i:page].xml?/?",	"SitemapDiscussions");
App::addRoute("GET|POST", "/sitemap.collections_[i:page].xml?/?",	"SitemapCollections");
App::addRoute("GET|POST", "/sitemap.categories_[i:page].xml?/?",	"SitemapCategories");
App::addRoute("GET|POST", "/sitemap.users_[i:page].xml?/?", 		"SitemapUsers");
App::addRoute("GET|POST", "/sitemap.index.xml?/?", 					"Sitemap"); 

// Admin 
App::addRoute("GET|POST", "/admin/modal/[*:modal]?/?",				["admin","Modal"]);
App::addRoute("GET|POST", "/admin/ajax/[*:ajax]/[*:action]?/?",		["admin","Ajax"]);
App::addRoute("GET|POST", "/admin?/?",								["admin","Main"]);
App::addRoute("GET|POST", "/admin/movie/[i:id]?/?",					["admin","Movie"]);
App::addRoute("GET|POST", "/admin/movies?/?",						["admin","Movies"]); 
App::addRoute("GET|POST", "/admin/serie/[i:id]?/?",					["admin","Serie"]);
App::addRoute("GET|POST", "/admin/series?/?",						["admin","Series"]);
App::addRoute("GET|POST", "/admin/episode/[i:serie]/[i:id]?/?",		["admin","Episode"]);
App::addRoute("GET|POST", "/admin/episodes/[i:id]?/?",				["admin","Episodes"]);
App::addRoute("GET|POST", "/admin/category/[i:id]?/?",				["admin","Category"]);
App::addRoute("GET|POST", "/admin/categories?/?",					["admin","Categories"]);
App::addRoute("GET|POST", "/admin/story/[i:id]?/?",					["admin","Story"]);
App::addRoute("GET|POST", "/admin/stories?/?",						["admin","Stories"]);
App::addRoute("GET|POST", "/admin/slide/[i:id]?/?",					["admin","Slide"]);
App::addRoute("GET|POST", "/admin/slider?/?",						["admin","Slider"]);
App::addRoute("GET|POST", "/admin/actor/[i:id]?/?",					["admin","Actor"]);
App::addRoute("GET|POST", "/admin/actors?/?",						["admin","Actors"]);
App::addRoute("GET|POST", "/admin/user/[i:id]?/?",					["admin","User"]);
App::addRoute("GET|POST", "/admin/users?/?",						["admin","Users"]);
App::addRoute("GET|POST", "/admin/collection/[i:id]?/?",			["admin","Collection"]);
App::addRoute("GET|POST", "/admin/collections?/?",					["admin","Collections"]);
App::addRoute("GET|POST", "/admin/discussion/[i:id]?/?",			["admin","Discussion"]);
App::addRoute("GET|POST", "/admin/discussions?/?",					["admin","Discussions"]);
App::addRoute("GET|POST", "/admin/comment/[i:id]?/?",				["admin","Comment"]);
App::addRoute("GET|POST", "/admin/comments?/?",						["admin","Comments"]);
App::addRoute("GET|POST", "/admin/tool/[i:id]?/?",					["admin","Tool"]); 
App::addRoute("GET|POST", "/admin/tools?/?",						["admin","Tools"]);
App::addRoute("GET|POST", "/admin/settings?/?",						["admin","Settings"]);
App::addRoute("GET|POST", "/admin/video/[i:id]?/?",					["admin","Video"]); 
App::addRoute("GET|POST", "/admin/videos?/?",						["admin","Videos"]);
App::addRoute("GET|POST", "/admin/ads/[i:id]?/?",					["admin","Ads"]);
App::addRoute("GET|POST", "/admin/report/[i:id]?/?",				["admin","Report"]); 
App::addRoute("GET|POST", "/admin/reports?/?",						["admin","Reports"]);
App::addRoute("GET|POST", "/admin/page/[i:id]?/?",					["admin","Page"]);
App::addRoute("GET|POST", "/admin/pages?/?",						["admin","Pages"]);
App::addRoute("GET|POST", "/admin/channel/[i:id]?/?",				["admin","Channel"]);
App::addRoute("GET|POST", "/admin/channels?/?",						["admin","Channels"]);
App::addRoute("GET|POST", "/admin/language/[i:id]?/?",				["admin","Language"]); 
App::addRoute("GET|POST", "/admin/languages?/?",					["admin","Languages"]); 
App::addRoute("GET|POST", "/admin/country/[i:id]?/?",				["admin","Country"]); 
App::addRoute("GET|POST", "/admin/countries?/?",					["admin","Countries"]); 
App::addRoute("GET|POST", "/admin/tmdb?/?",							["admin","Tmdb"]);  
App::addRoute("GET|POST", "/admin/onesignal?/?",					["admin","Onesignal"]);  
