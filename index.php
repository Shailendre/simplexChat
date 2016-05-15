<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Group Chat">
    <meta name="author" content="Shailendra">

    <title>Simple-Group-Chat || Power of HTML5</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom script for chat wrapper -->
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!-- Custom CSS -->
    <link href="css/small-business.css" rel="stylesheet">

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menuitems">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand navbar-text" href="#">SIMPLEX CHAT</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="menuitems">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#section1">How does this work</a>
                    </li>
                    <li>
                        <a href="#section2">Services</a>
                    </li>
                    <li>
                        <a href="#section3">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Heading Row -->
        <div class="row">
            <div class="col-md-8">
            	<!--login/register page-->
            	
				    	<div class="row">
							<div class="col-md-6 col-md-offset-3">
								<div class="panel panel-login">
									<div class="panel-heading">
										<div class="row">
											<div class="col-xs-6">
												<a href="#" class="active" id="login-form-link">Login</a>
											</div>
											<div class="col-xs-6">
												<a href="#" id="register-form-link">Register</a>
											</div>
										</div>
										<hr>
									</div>
									<div class="panel-body">
										<div class="row">
											<div class="col-lg-12">
												<form id="login-form" role="form" style="display: block;">
													<div class="form-group">
														<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
													</div>
													<div class="form-group">
														<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
													</div>
													<div>
                                                        <p id="err-msg-login" style="color: red"></p>
                                                    </div>
													<div class="form-group">
														<div class="row">
															<div class="col-sm-6 col-sm-offset-3">
																<input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
															</div>
														</div>
													</div>
												</form>
												<form id="register-form" role="form" style="display: none;">
													<div class="form-group">
														<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="" required>
													</div>
													<div class="form-group">
														<input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="" required>
													</div>
													<div class="form-group">
														<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password (min 8 chars)" required>
													</div>
													<div class="form-group">
														<input type="password" name="confirm" id="confirm" tabindex="2" class="form-control" placeholder="Confirm Password" required>
													</div>
                                                    <div>
                                                        <p id="err-msg-register" style="color: red"></p>
                                                    </div>
													<div class="form-group">
														<div class="row">
															<div class="col-sm-6 col-sm-offset-3">
																<input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
															</div>
														</div>
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
            </div>
            <!-- /.col-md-8 -->
            <div class="col-md-4">
                <h1>The Simple Group Chat</h1>
                <p>All you need to do is set up your name and push the send button to let you friends in the group room know what's in your mind.
                 Enjoy now, join the coolest web technology at its best when it connects you to your loved ones.
                </p>
                
            </div>
            <!-- /.col-md-4 -->
        </div>
        <!-- /.row -->

        <hr>

        <!-- Content Row -->
        <div class="row" id="section1">
            <div class="col-md-12">
                <h1>All you need to know about this</h1>
                <p>Know what this site is made of that makes it so coool.</p>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                    <h3>PHP Server</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <p>
                            Your web browser establishes a secure connection with the server which is powered by php. The entire server is coded in php, which follows the trivial norms of a server program. This php server first creates a socket for tcp/ip protocol and is bound to a specfic port number and address (here in this case it runs on <a href="http://athena.nitc.ac.in">athena.nitc.ac.in</a>). Then it infinitely listens on this configuration, and in case any client (in this case your web browser) tries to connect to it, it accepts it and stores the client's socket information in an array, which it later uses to broadcast messages(in json format) to all the client (using the clients socket information stored in an array told earlier) in the group room.  
                        </p>
                        <p>
                            <a class="btn btn-default" href="http://athena.nitc.ac.in/shailendra_b120588cs/server.php">Explore the server code</a>
                        </p>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-12">
                            <img src="img/php_logo.svg"  width="200">
                            </div>
                        </div>
                    </div>
                </div>
                <hr>


                <div class="row">
                    <div class="col-md-12">
                    <h3 style="float:right;">Web Browser Clients</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-12">
                            <img src="img/html_logo.png"  width="200">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <p>
                            The WebSocket is a feature of HTML5 for establishing a socket connections between a web browser and a server, once the connection has been established with the server, all WebSocket data (frames) are sent directly over a socket rather than usual HTTP response and requests, giving us much faster and persistent communication between a web browser and a server.
                        </p>
                        <p>
                            To open the socket connection, we simply call <i>new WebSocket(ws://SERVER URL),</i> since WebSocket uses a different protocol for the connections, we use <i>ws://</i> instead of <i>http://,</i> followed by host, port number and daemon script in your server:
                        </p>
                        <p>
                            Right after opening the connection, we need to attach some event handlers that let us know status of connectivity, errors and incoming messages, for your references:

                                
                                <ul>
                                    <li><b>WebSocket(wsUri)</b> — creates a new WebSocket object.</li>
                                    <li><b>.onopen</b> — Event occurs when connection is established.</li>
                                    <li><b>.onclose</b> — Event occurs when connection is closed.</li>
                                    <li><b>.onmessage</b> — Event occurs when client receives data from server.</li>
                                    <li><b>.onerror</b> — Event occurs when there is an error.</li>
                                    <li><b>.send(message)</b> — Transmits data to server using open connection.</li>
                                    <li><b>.close()</b> — Terminates existing connection.</li>
                                 </ul>
                        </p>
                        <p>
                            <a class="btn btn-default" href="http://athena.nitc.ac.in/shailendra_b120588cs/script.php">Explore the script code</a>
                        </p>
                    </div>
                </div>
            </div>
            <!-- /.col-md-4 -->
        </div>
        <hr>


        <div class="row" id=section2>
        <!-- /.col-md-4 -->
            <div class="col-md-12">
                <h1>Services</h1>
                <p> This simple group chat does have a few limitations, like one cannot create his/her own chat room, rather the current chat room is shared among entire world. But apart from it, atleast it lets you talk to your people, that is sometimes all one needs!</p>
            </div>
        </div>

        <hr>

        <div class="row" id=section3>
            <!-- /.col-md-4 -->
            <div class="col-md-12">
                <h1>Contact</h1>
                <p>Please feel free to complain if theres any glitch in the application as per the services it ought to deliver now. Contact us on e-mail.</p>
                <p>
                <a href="mailto:shailendra.sh@zoho.com?Subject=Bugs" target="_top">Send Mail.</a>
                </p>
            </div>
        </div>
            
        <hr>

        <!-- /.row -->

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; The SickBastard Blog 2016</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Main networking script -->
    <script type="text/javascript" src="js/indexscript.js"></script>

</body>

</html>
