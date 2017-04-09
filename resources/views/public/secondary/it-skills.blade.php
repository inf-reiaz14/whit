<div class="col-xs-12 transparent-bg">
	<h2 class="light-Grey-text1 big-heading margin-top-hadding">
		<center>The TeamSourcing popular IT skill sets</center>
	</h2>
</div>


@if($skillsets)

	<div class="col-xs-12 col-sm-10 col-sm-offset-1 transparent-bg nav nav-tabs nav-justified skill-group">
		@foreach($skillsets as $skillset)
		<div class="col-xs-6 col-sm-4 transparent-bg">
			<a class="dark-Grey-text skillset" href="#{{$skillset->id}}"><i class="{{$skillset->icon}} {{$skillset->class_name}} @if($skillsets->first()->id == $skillset->id)popover-item visible @endif popover-item" title="click to expand"></i><span class="text">{{$skillset->name}}</span></a>
		</div>
		@endforeach
	</div>
	
	<div class="col-xs-12 col-sm-10 col-sm-offset-1 transparent-bg">
		<div class="col-xs-12 tab-content transparent-bg language-group">
			@if($skillsets)
				@foreach($skillsets as $skillset)
				<div id="{{$skillset->id}}" class="tab-pane skillitem">
					<div class="col-xs-12 transparent-bg">
						
						<h2 class="text-center title-color">{{$skillset->name}}</h2>
						<h4 class="text-center title-color"> {{$skillset->title}}</h4>
						<hr style="display: block;border-top: 3px solid #127473;">
						<ul class="col-xs-12 language-list slick" data-slick='{"autoplay": false, "autoplaySpeed": 7000, "slidesToShow": 4, "variableWidth": true, "centerMode": false, "centerPadding": 0, "pauseOnHover": true, "accessibility": false, "infinit": true, "speed": 300 }'>
							@if(count($skillItemsBySkillSets) > 0)
								@if( (count($skillItemsBySkillSets[$skillset->id]['odds']) + count($skillItemsBySkillSets[$skillset->id]['evens']) ) > 8)
									@if(count($skillItemsBySkillSets[$skillset->id]['odds']) > count($skillItemsBySkillSets[$skillset->id]['evens']))
										@for($i=0; $i< count($skillItemsBySkillSets[$skillset->id]['odds']); $i++)
										<li class="nav nav-tabs">
											@if(array_key_exists($i, $skillItemsBySkillSets[$skillset->id]['odds']))
											<a class="green-bg white-text toggle-skill-details" href="#lang{{$skillItemsBySkillSets[$skillset->id]['odds'][$i]['id']}}-details"><span>{{$skillItemsBySkillSets[$skillset->id]['odds'][$i]['name']}}</span>
												<meta name="name" content="{{$skillItemsBySkillSets[$skillset->id]['odds'][$i]['meta_tag']}}" />
												<meta name="description" content="{{$skillItemsBySkillSets[$skillset->id]['odds'][$i]['meta_description']}}" />
											</a>
											@endif
											@if(array_key_exists($i, $skillItemsBySkillSets[$skillset->id]['evens']))
											<a class="green-bg white-text toggle-skill-details" href="#lang{{$skillItemsBySkillSets[$skillset->id]['evens'][$i]['id']}}-details"><span>{{$skillItemsBySkillSets[$skillset->id]['evens'][$i]['name']}}</span>
												<meta name="name" content="{{$skillItemsBySkillSets[$skillset->id]['evens'][$i]['meta_tag']}}" />
												<meta name="description" content="{{$skillItemsBySkillSets[$skillset->id]['evens'][$i]['meta_description']}}" />
											</a>
											@endif
										</li>
										@endfor
									@else
										@for($i=0; $i< count($skillItemsBySkillSets[$skillset->id]['evens']); $i++)
										<li class="nav nav-tabs">
											@if(array_key_exists($i, $skillItemsBySkillSets[$skillset->id]['evens']))
											<a class="green-bg white-text toggle-skill-details" href="lang{{$skillItemsBySkillSets[$skillset->id]['evens'][$i]['id']}}-details"><span>{{$skillItemsBySkillSets[$skillset->id]['evens'][$i]['name']}}</span>
												<meta name="name" content="{{$skillItemsBySkillSets[$skillset->id]['evens'][$i]['meta_tag']}}" />
												<meta name="description" content="{{$skillItemsBySkillSets[$skillset->id]['evens'][$i]['meta_description']}}" />
											</a>
											@endif
											@if(array_key_exists($i, $skillItemsBySkillSets[$skillset->id]['odds']))
											<a class="green-bg white-text toggle-skill-details" href="lang{{$skillItemsBySkillSets[$skillset->id]['odds'][$i]['id']}}-details"><span>{{$skillItemsBySkillSets[$skillset->id]['odds'][$i]['name']}}</span>
												<meta name="name" content="{{$skillItemsBySkillSets[$skillset->id]['odds'][$i]['meta_tag']}}" />
												<meta name="description" content="{{$skillItemsBySkillSets[$skillset->id]['odds'][$i]['meta_description']}}" />
											</a>
											@endif
										</li>
										@endfor
									@endif
								@else
									@for($i=0; $i< count($skillItemsBySkillSets[$skillset->id]['odds']); $i++)
										@if(array_key_exists($i, $skillItemsBySkillSets[$skillset->id]['odds']))
										<li>
											<a class="green-bg white-text toggle-skill-details" href="lang{{$skillItemsBySkillSets[$skillset->id]['odds'][$i]['id']}}-details"><span>{{$skillItemsBySkillSets[$skillset->id]['odds'][$i]['name']}}</span>
												<meta name="name" content="{{$skillItemsBySkillSets[$skillset->id]['odds'][$i]['meta_tag']}}" />
												<meta name="description" content="{{$skillItemsBySkillSets[$skillset->id]['odds'][$i]['meta_description']}}" />
											</a>
										</li>
										@endif
									@endfor
									@for($i=0; $i< count($skillItemsBySkillSets[$skillset->id]['evens']); $i++)
										@if(array_key_exists($i, $skillItemsBySkillSets[$skillset->id]['evens']))
										<li>
											<a class="green-bg white-text toggle-skill-details" href="lang{{$skillItemsBySkillSets[$skillset->id]['evens'][$i]['id']}}-details"><span>{{$skillItemsBySkillSets[$skillset->id]['evens'][$i]['name']}}</span>
												<meta name="name" content="{{$skillItemsBySkillSets[$skillset->id]['evens'][$i]['meta_tag']}}" />
												<meta name="description" content="{{$skillItemsBySkillSets[$skillset->id]['evens'][$i]['meta_description']}}" />
											</a>
										</li>
										@endif
									@endfor
								@endif
							@endif
						</ul>
						
						<div class="col-xs-12 tab-content transparent-bg language-group">
							@if($skillitems)
								@foreach($skillitems as $skillitem)
								<div skill-details="lang{{$skillitem->id}}-details" class="tab-pane skill-details">
									<div class="col-xs-12 framwork-holder transparent-bg green-border">
										<div class="col-xs-12 col-sm-5 transparent-bg">
											<h2 class="pull-10 green-text lang-name">{{$skillitem->name}}</h2>
										</div>
										<div class="col-xs-12 col-sm-7 transparent-bg">
											<h3 class="language-heading green-text">
												@if($skillset->id == 1)Frameworks 
												@elseif($skillset->id == 2)Softwares/languages 
												@elseif($skillset->id == 3)Technology/Softwares/languages 
												@elseif($skillset->id == 4)Operating Systems/Devices 
												@elseif($skillset->id == 5)Databases/Applications 
												@elseif($skillset->id == 6)Back office 
												@elseif($skillset->id == 7)R&D/Testing
												@elseif($skillset->id == 8)Games
												@else Animation
												@endif
											</h3>
											<ul class="framework-list">
											@if( $skillchilds->where('skillitem_id', $skillitem->id)->count() > 0 )
												
												@foreach($skillchilds->where('skillitem_id', $skillitem->id) as $skillchild)
												
													@if( $skillchild->frameworks()->count() > 0 )
														
														<h4 class="light-Grey-text">
															<a class="gray-text1" href="@if(strlen($skillchild->link) > 0){{action('StaticPageController@skillChildDetail', $skillchild->link)}} @else # @endif">{{$skillchild->name}}</a>
														</h4>
														
														@foreach( $skillchild->frameworks as $framework)
															<li><a href="@if(strlen($framework->link) > 0){{action('StaticPageController@skillApplications', $framework->link)}} @else # @endif">{{$framework->name}}</a></li>
														@endforeach
														
													@else
														<li><a href="@if(strlen($skillchild->link) > 0){{action('StaticPageController@skillChildDetail', $skillchild->link)}} @else # @endif">{{$skillchild->name}}</a></li>
													@endif
													
												@endforeach
												
											@endif
										</ul>
										</div>
										
										<div class="row">
											<div class="col-xs-12 transparent-bg btn-popups pull-down-20">
												<center>
													<a href="{{ action('StaticPageController@skillItemDetail', $skillitem->link) }}" class="btn btn-font btn-default transparent-bg blue-text green-border push-up-10">
													
												@if($skillitem->skillset_id == 1)
													{{$skillitem->name.' Programmer'}} 
												@elseif($skillitem->skillset_id == 2)
													{{$skillitem->name.' Expert'}}
												@elseif($skillitem->skillset_id == 3)
													{{$skillitem->name.' Expert'}}
												@elseif($skillitem->skillset_id == 4)
													{{$skillitem->name.' Expert'}}
												@elseif($skillitem->skillset_id == 5)
													{{$skillitem->name.' Expert'}}
												@elseif($skillitem->skillset_id == 6)
													{{$skillitem->name}}
												@elseif($skillitem->skillset_id == 7)
													{{$skillitem->name.' Expert'}}
												@elseif($skillitem->skillset_id == 8)
													{{$skillitem->name.' Expert'}}
												@elseif($skillitem->skillset_id == 9)
													{{$skillitem->name.' Expert'}}
												@endif 	
													
													</a>
												</center>
											</div>
										</div>
									</div>
								</div>
								@endforeach
							@endif
						</div>
					</div>
				</div>
				@endforeach
			@endif
		</div>
	</div>
	
	<div class="col-xs-12 transparent-bg btn-popups">
		<center>
			<a id="contact-area-popup" href="#" data-toggle="modal" data-target="#my-modal" class="btn btn-font btn-default transparent-bg blue-text blue-border push-up-20 f-s-30 btn-popup">Schedule Meeting With Talent Acquisition Manager</a>
		</center>
	</div>

@endif


