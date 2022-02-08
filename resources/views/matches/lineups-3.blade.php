@extends('layouts.master')

@section('content')
<!-- Content
		================================================== -->
        <main class="site-content site-content--center page" id="wrapper">
			<div class="container">
				<div class="page-heading page-heading--default text-small text-center w-100">
					<div class="page-heading__subtitle h5">
						<span class="color-primary">Wednesday Feb 14th, 2018 /</span> Necromancers <span class="color-primary">vs</span> Fierce Eagles
					</div>
					<h1 class="page-heading__title h2">Striker Go Tournament</h1>
				</div>

				<ul class="match-stats-links match-stats-links--main">
					<li>
						<a href="./matches-overview-1.html">
							<svg role="img" class="df-icon df-icon--overview">
								<use xlink:href="assets/img/necromancers.svg#overview"/>
							</svg>
						</a>
					</li>
					<li>
						<a href="./matches-stats-1.html">
							<svg role="img" class="df-icon df-icon--stats">
								<use xlink:href="assets/img/necromancers.svg#stats"/>
							</svg>
						</a>
					</li>
					<li>
						<a href="#" class="active">
							<svg role="img" class="df-icon df-icon--lineups">
								<use xlink:href="assets/img/necromancers.svg#lineups"/>
							</svg>
						</a>
					</li>
					<li>
						<a href="./matches-replay.html">
							<svg role="img" class="df-icon df-icon--replay">
								<use xlink:href="assets/img/necromancers.svg#replay"/>
							</svg>
						</a>
					</li>
				</ul>

				<div class="matches-tabs mt-sm-auto mb-sm-auto">
					<ul class="matches-tabs__navigation nav" role="tablist">
						<li class="nav-item">
							<a href="#tab-1" role="tab" data-toggle="tab" class="active">Game 01</a>
						</li>
						<li class="nav-item">
							<a href="#tab-2" role="tab" data-toggle="tab">Game 02</a>
						</li>
						<li class="nav-item">
							<a href="#tab-3" role="tab" data-toggle="tab">Game 03</a>
						</li>
					</ul>
					<div class="matches-tabs__content tab-content">
						<div class="match-lineups-container tab-pane fade show active" id="tab-1" role="tabpanel">
							<div class="table-responsive">
								<table class="matches-table lineups-table lineups-table--style-3">
									<thead>
										<tr>
											<th class="td-player">
												<figure class="match-team" role="group">
													<figure class="match-team-logo match-team-logo--team-1" role="group">
														<img src="assets/img/samples/logo-necromancers-30.png" srcset="assets/img/samples/logo-necromancers-30@2x.png 2x" alt="Necromancers Logo">
													</figure>
													<figcaption>
														<div class="match-team__name">Necromancers</div>
															<div class="match-team__country ">United States</div>
													</figcaption>
												</figure>
											</th>
											<th class="td-k">K</th>
											<th class="td-d">D</th>
											<th class="td-a">A</th>
											<th class="td-kdar td-center-left">KDA.R</th>
											<th class="td-kdar td-center-right">KDA.R</th>
											<th class="td-a">A</th>
											<th class="td-d">D</th>
											<th class="td-k">K</th>
											<th class="td-player">
												<figure class="match-team" role="group">
													<figure class="match-team-logo match-team-logo--team-5" role="group">
														<img src="assets/img/samples/logo-eagles-30.png" srcset="assets/img/samples/logo-eagles-30@2x.png 2x" alt="Fierce Eagles Logo">
													</figure>
													<figcaption>
														<div class="match-team__name">Fierce Eagles</div>
															<div class="match-team__country ">France</div>
													</figcaption>
												</figure>
											</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<figure class="match-player team-1" role="group">
													<figure class="match-player__avatar">
															<img src="assets/img/samples/match-player-01-60x60.png" alt="">
													</figure>
													<figcaption>
														<span class="match-player__nickname">DaVikinger90</span>
														<span class="match-player__name">James Spiegel</span>
													</figcaption>
												</figure>
											</td>
											<td>45</td>
											<td>31</td>
											<td>77</td>
											<td class="td-center-left">4.5</td>
											<td class="td-center-right">4.9</td>
											<td>67</td>
											<td>34</td>
											<td>52</td>
											<td>
												<figure class="match-player team-5" role="group">
													<figure class="match-player__avatar">
															<img src="assets/img/samples/match-player-unknow-right-60x60.png" alt="">
													</figure>
													<figcaption>
														<span class="match-player__nickname">Lionel-Reese</span>
														<span class="match-player__name">Markus Jhonson</span>
													</figcaption>
												</figure>
											</td>
										</tr>

										<tr>
											<td>
												<figure class="match-player team-1" role="group">
													<figure class="match-player__avatar">
															<img src="assets/img/samples/match-player-02-60x60.png" alt="">
													</figure>
													<figcaption>
														<span class="match-player__nickname">JULIE_NOIRE</span>
														<span class="match-player__name">Julie Rodgers</span>
													</figcaption>
												</figure>
											</td>
											<td>39</td>
											<td>34</td>
											<td>84</td>
											<td class="td-center-left">4.0</td>
											<td class="td-center-right">4.1</td>
											<td>80</td>
											<td>37</td>
											<td>44</td>
											<td>
												<figure class="match-player team-5" role="group">
													<figure class="match-player__avatar">
															<img src="assets/img/samples/match-player-unknow-right-60x60.png" alt="">
													</figure>
													<figcaption>
														<span class="match-player__nickname">NekoKrisser</span>
														<span class="match-player__name">Tess Griffin</span>
													</figcaption>
												</figure>
											</td>
										</tr>

										<tr>
											<td>
												<figure class="match-player team-1" role="group">
													<figure class="match-player__avatar">
															<img src="assets/img/samples/match-player-03-60x60.png" alt="">
													</figure>
													<figcaption>
														<span class="match-player__nickname">G-Huntress</span>
														<span class="match-player__name">April Summers</span>
													</figcaption>
												</figure>
											</td>
											<td>42</td>
											<td>45</td>
											<td>75</td>
											<td class="td-center-left">4.2</td>
											<td class="td-center-right">5.2</td>
											<td>72</td>
											<td>30</td>
											<td>58</td>
											<td>
												<figure class="match-player team-5" role="group">
													<figure class="match-player__avatar">
															<img src="assets/img/samples/match-player-unknow-right-60x60.png" alt="">
													</figure>
													<figcaption>
														<span class="match-player__nickname">Sam-X-99</span>
														<span class="match-player__name">Wesley McCoy</span>
													</figcaption>
												</figure>
											</td>
										</tr>

										<tr>
											<td>
												<figure class="match-player team-1" role="group">
													<figure class="match-player__avatar">
															<img src="assets/img/samples/match-player-04-60x60.png" alt="">
													</figure>
													<figcaption>
														<span class="match-player__nickname">Crazzzy_80</span>
														<span class="match-player__name">Marc Jhonson</span>
													</figcaption>
												</figure>
											</td>
											<td>40</td>
											<td>37</td>
											<td>60</td>
											<td class="td-center-left">4.0</td>
											<td class="td-center-right">4.8</td>
											<td>75</td>
											<td>41</td>
											<td>29</td>
											<td>
												<figure class="match-player team-5" role="group">
													<figure class="match-player__avatar">
															<img src="assets/img/samples/match-player-unknow-right-60x60.png" alt="">
													</figure>
													<figcaption>
														<span class="match-player__nickname">SHARK_BULLET</span>
														<span class="match-player__name">Todd Grynson</span>
													</figcaption>
												</figure>
											</td>
										</tr>

										<tr>
											<td>
												<figure class="match-player team-1" role="group">
													<figure class="match-player__avatar">
															<img src="assets/img/samples/match-player-05-60x60.png" alt="">
													</figure>
													<figcaption>
														<span class="match-player__nickname">FAYEDBEBOP</span>
														<span class="match-player__name">Sarah Stacy</span>
													</figcaption>
												</figure>
											</td>
											<td>34</td>
											<td>32</td>
											<td>66</td>
											<td class="td-center-left">4.4</td>
											<td class="td-center-right">4.3</td>
											<td>69</td>
											<td>29</td>
											<td>34</td>
											<td>
												<figure class="match-player team-5" role="group">
													<figure class="match-player__avatar">
															<img src="assets/img/samples/match-player-unknow-right-60x60.png" alt="">
													</figure>
													<figcaption>
														<span class="match-player__nickname">The Destroy</span>
														<span class="match-player__name">Mary Parker</span>
													</figcaption>
												</figure>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>

						<div class="match-lineups-container tab-pane fade" id="tab-2" role="tabpanel">
							<div class="table-responsive">
								<table class="matches-table lineups-table lineups-table--style-3">
									<thead>
										<tr>
											<th class="td-player">
												<figure class="match-team" role="group">
													<figure class="match-team-logo match-team-logo--team-1" role="group">
														<img src="assets/img/samples/logo-necromancers-30.png" srcset="assets/img/samples/logo-necromancers-30@2x.png 2x" alt="Necromancers Logo">
													</figure>
													<figcaption>
														<div class="match-team__name">Necromancers</div>
															<div class="match-team__country ">United States</div>
													</figcaption>
												</figure>
											</th>
											<th class="td-k">K</th>
											<th class="td-d">D</th>
											<th class="td-a">A</th>
											<th class="td-kdar td-center-left">KDA.R</th>
											<th class="td-kdar td-center-right">KDA.R</th>
											<th class="td-a">A</th>
											<th class="td-d">D</th>
											<th class="td-k">K</th>
											<th class="td-player">
												<figure class="match-team" role="group">
													<figure class="match-team-logo match-team-logo--team-5" role="group">
														<img src="assets/img/samples/logo-eagles-30.png" srcset="assets/img/samples/logo-eagles-30@2x.png 2x" alt="Fierce Eagles Logo">
													</figure>
													<figcaption>
														<div class="match-team__name">Fierce Eagles</div>
															<div class="match-team__country ">France</div>
													</figcaption>
												</figure>
											</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<figure class="match-player team-1" role="group">
													<figure class="match-player__avatar">
															<img src="assets/img/samples/match-player-02-60x60.png" alt="">
													</figure>
													<figcaption>
														<span class="match-player__nickname">JULIE_NOIRE</span>
														<span class="match-player__name">Julie Rodgers</span>
													</figcaption>
												</figure>
											</td>
											<td>39</td>
											<td>34</td>
											<td>84</td>
											<td class="td-center-left">4.0</td>
											<td class="td-center-right">4.1</td>
											<td>80</td>
											<td>37</td>
											<td>44</td>
											<td>
												<figure class="match-player team-5" role="group">
													<figure class="match-player__avatar">
															<img src="assets/img/samples/match-player-unknow-right-60x60.png" alt="">
													</figure>
													<figcaption>
														<span class="match-player__nickname">NekoKrisser</span>
														<span class="match-player__name">Tess Griffin</span>
													</figcaption>
												</figure>
											</td>
										</tr>

										<tr>
											<td>
												<figure class="match-player team-1" role="group">
													<figure class="match-player__avatar">
															<img src="assets/img/samples/match-player-01-60x60.png" alt="">
													</figure>
													<figcaption>
														<span class="match-player__nickname">DaVikinger90</span>
														<span class="match-player__name">James Spiegel</span>
													</figcaption>
												</figure>
											</td>
											<td>45</td>
											<td>31</td>
											<td>77</td>
											<td class="td-center-left">4.5</td>
											<td class="td-center-right">4.9</td>
											<td>67</td>
											<td>34</td>
											<td>52</td>
											<td>
												<figure class="match-player team-5" role="group">
													<figure class="match-player__avatar">
															<img src="assets/img/samples/match-player-unknow-right-60x60.png" alt="">
													</figure>
													<figcaption>
														<span class="match-player__nickname">Lionel-Reese</span>
														<span class="match-player__name">Markus Jhonson</span>
													</figcaption>
												</figure>
											</td>
										</tr>

										<tr>
											<td>
												<figure class="match-player team-1" role="group">
													<figure class="match-player__avatar">
															<img src="assets/img/samples/match-player-04-60x60.png" alt="">
													</figure>
													<figcaption>
														<span class="match-player__nickname">Crazzzy_80</span>
														<span class="match-player__name">Marc Jhonson</span>
													</figcaption>
												</figure>
											</td>
											<td>40</td>
											<td>37</td>
											<td>60</td>
											<td class="td-center-left">4.0</td>
											<td class="td-center-right">4.8</td>
											<td>75</td>
											<td>41</td>
											<td>29</td>
											<td>
												<figure class="match-player team-5" role="group">
													<figure class="match-player__avatar">
															<img src="assets/img/samples/match-player-unknow-right-60x60.png" alt="">
													</figure>
													<figcaption>
														<span class="match-player__nickname">SHARK_BULLET</span>
														<span class="match-player__name">Todd Grynson</span>
													</figcaption>
												</figure>
											</td>
										</tr>

										<tr>
											<td>
												<figure class="match-player team-1" role="group">
													<figure class="match-player__avatar">
															<img src="assets/img/samples/match-player-05-60x60.png" alt="">
													</figure>
													<figcaption>
														<span class="match-player__nickname">FAYEDBEBOP</span>
														<span class="match-player__name">Sarah Stacy</span>
													</figcaption>
												</figure>
											</td>
											<td>34</td>
											<td>32</td>
											<td>66</td>
											<td class="td-center-left">4.4</td>
											<td class="td-center-right">4.3</td>
											<td>69</td>
											<td>29</td>
											<td>34</td>
											<td>
												<figure class="match-player team-5" role="group">
													<figure class="match-player__avatar">
															<img src="assets/img/samples/match-player-unknow-right-60x60.png" alt="">
													</figure>
													<figcaption>
														<span class="match-player__nickname">The Destroy</span>
														<span class="match-player__name">Mary Parker</span>
													</figcaption>
												</figure>
											</td>
										</tr>

										<tr>
											<td>
												<figure class="match-player team-1" role="group">
													<figure class="match-player__avatar">
															<img src="assets/img/samples/match-player-03-60x60.png" alt="">
													</figure>
													<figcaption>
														<span class="match-player__nickname">G-Huntress</span>
														<span class="match-player__name">April Summers</span>
													</figcaption>
												</figure>
											</td>
											<td>42</td>
											<td>45</td>
											<td>75</td>
											<td class="td-center-left">4.2</td>
											<td class="td-center-right">5.2</td>
											<td>72</td>
											<td>30</td>
											<td>58</td>
											<td>
												<figure class="match-player team-5" role="group">
													<figure class="match-player__avatar">
															<img src="assets/img/samples/match-player-unknow-right-60x60.png" alt="">
													</figure>
													<figcaption>
														<span class="match-player__nickname">Sam-X-99</span>
														<span class="match-player__name">Wesley McCoy</span>
													</figcaption>
												</figure>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>

						<div class="match-lineups-container tab-pane fade" id="tab-3" role="tabpanel">
							<div class="table-responsive">
								<table class="matches-table lineups-table lineups-table--style-3">
									<thead>
										<tr>
											<th class="td-player">
												<figure class="match-team" role="group">
													<figure class="match-team-logo match-team-logo--team-1" role="group">
														<img src="assets/img/samples/logo-necromancers-30.png" srcset="assets/img/samples/logo-necromancers-30@2x.png 2x" alt="Necromancers Logo">
													</figure>
													<figcaption>
														<div class="match-team__name">Necromancers</div>
															<div class="match-team__country ">United States</div>
													</figcaption>
												</figure>
											</th>
											<th class="td-k">K</th>
											<th class="td-d">D</th>
											<th class="td-a">A</th>
											<th class="td-kdar td-center-left">KDA.R</th>
											<th class="td-kdar td-center-right">KDA.R</th>
											<th class="td-a">A</th>
											<th class="td-d">D</th>
											<th class="td-k">K</th>
											<th class="td-player">
												<figure class="match-team" role="group">
													<figure class="match-team-logo match-team-logo--team-5" role="group">
														<img src="assets/img/samples/logo-eagles-30.png" srcset="assets/img/samples/logo-eagles-30@2x.png 2x" alt="Fierce Eagles Logo">
													</figure>
													<figcaption>
														<div class="match-team__name">Fierce Eagles</div>
															<div class="match-team__country ">France</div>
													</figcaption>
												</figure>
											</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<figure class="match-player team-1" role="group">
													<figure class="match-player__avatar">
															<img src="assets/img/samples/match-player-03-60x60.png" alt="">
													</figure>
													<figcaption>
														<span class="match-player__nickname">G-Huntress</span>
														<span class="match-player__name">April Summers</span>
													</figcaption>
												</figure>
											</td>
											<td>42</td>
											<td>45</td>
											<td>75</td>
											<td class="td-center-left">4.2</td>
											<td class="td-center-right">5.2</td>
											<td>72</td>
											<td>30</td>
											<td>58</td>
											<td>
												<figure class="match-player team-5" role="group">
													<figure class="match-player__avatar">
															<img src="assets/img/samples/match-player-unknow-right-60x60.png" alt="">
													</figure>
													<figcaption>
														<span class="match-player__nickname">Sam-X-99</span>
														<span class="match-player__name">Wesley McCoy</span>
													</figcaption>
												</figure>
											</td>
										</tr>

										<tr>
											<td>
												<figure class="match-player team-1" role="group">
													<figure class="match-player__avatar">
															<img src="assets/img/samples/match-player-04-60x60.png" alt="">
													</figure>
													<figcaption>
														<span class="match-player__nickname">Crazzzy_80</span>
														<span class="match-player__name">Marc Jhonson</span>
													</figcaption>
												</figure>
											</td>
											<td>40</td>
											<td>37</td>
											<td>60</td>
											<td class="td-center-left">4.0</td>
											<td class="td-center-right">4.8</td>
											<td>75</td>
											<td>41</td>
											<td>29</td>
											<td>
												<figure class="match-player team-5" role="group">
													<figure class="match-player__avatar">
															<img src="assets/img/samples/match-player-unknow-right-60x60.png" alt="">
													</figure>
													<figcaption>
														<span class="match-player__nickname">SHARK_BULLET</span>
														<span class="match-player__name">Todd Grynson</span>
													</figcaption>
												</figure>
											</td>
										</tr>

										<tr>
											<td>
												<figure class="match-player team-1" role="group">
													<figure class="match-player__avatar">
															<img src="assets/img/samples/match-player-05-60x60.png" alt="">
													</figure>
													<figcaption>
														<span class="match-player__nickname">FAYEDBEBOP</span>
														<span class="match-player__name">Sarah Stacy</span>
													</figcaption>
												</figure>
											</td>
											<td>34</td>
											<td>32</td>
											<td>66</td>
											<td class="td-center-left">4.4</td>
											<td class="td-center-right">4.3</td>
											<td>69</td>
											<td>29</td>
											<td>34</td>
											<td>
												<figure class="match-player team-5" role="group">
													<figure class="match-player__avatar">
															<img src="assets/img/samples/match-player-unknow-right-60x60.png" alt="">
													</figure>
													<figcaption>
														<span class="match-player__nickname">The Destroy</span>
														<span class="match-player__name">Mary Parker</span>
													</figcaption>
												</figure>
											</td>
										</tr>

										<tr>
											<td>
												<figure class="match-player team-1" role="group">
													<figure class="match-player__avatar">
															<img src="assets/img/samples/match-player-02-60x60.png" alt="">
													</figure>
													<figcaption>
														<span class="match-player__nickname">JULIE_NOIRE</span>
														<span class="match-player__name">Julie Rodgers</span>
													</figcaption>
												</figure>
											</td>
											<td>39</td>
											<td>34</td>
											<td>84</td>
											<td class="td-center-left">4.0</td>
											<td class="td-center-right">4.1</td>
											<td>80</td>
											<td>37</td>
											<td>44</td>
											<td>
												<figure class="match-player team-5" role="group">
													<figure class="match-player__avatar">
															<img src="assets/img/samples/match-player-unknow-right-60x60.png" alt="">
													</figure>
													<figcaption>
														<span class="match-player__nickname">NekoKrisser</span>
														<span class="match-player__name">Tess Griffin</span>
													</figcaption>
												</figure>
											</td>
										</tr>

										<tr>
											<td>
												<figure class="match-player team-1" role="group">
													<figure class="match-player__avatar">
															<img src="assets/img/samples/match-player-01-60x60.png" alt="">
													</figure>
													<figcaption>
														<span class="match-player__nickname">DaVikinger90</span>
														<span class="match-player__name">James Spiegel</span>
													</figcaption>
												</figure>
											</td>
											<td>45</td>
											<td>31</td>
											<td>77</td>
											<td class="td-center-left">4.5</td>
											<td class="td-center-right">4.9</td>
											<td>67</td>
											<td>34</td>
											<td>52</td>
											<td>
												<figure class="match-player team-5" role="group">
													<figure class="match-player__avatar">
															<img src="assets/img/samples/match-player-unknow-right-60x60.png" alt="">
													</figure>
													<figcaption>
														<span class="match-player__nickname">Lionel-Reese</span>
														<span class="match-player__name">Markus Jhonson</span>
													</figcaption>
												</figure>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>

@endsection

