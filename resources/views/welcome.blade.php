<html>
	<head>
		<title>Welcome</title>
		<style>
			body {
				margin: 0;
				padding: 0;
				width: 100%;
				height: 100%;
				color: #ffffffb3;
				display: table;
				font-weight: 100;
                font-family: system-ui;
                background-image: url("/images/the-great-gatsby-movie.jpg");
                background-position: center;
                background-size: cover;
			}

			.container {
				text-align: center;
				display: table-cell;
				vertical-align: middle;
                padding-top: 10px;
			}

			.content {
				text-align: center;
				display: inline-block;
			}

			.title {
				font-size: 96px;
				margin-bottom: 40px;
                letter-spacing: 0.7em;
			}

			.quote {
				font-size: 24px;
			}

            a {
                letter-spacing: 0.7em;
                color: #ffffffb3;
                text-decoration: none;
                border-bottom: 1px dashed #ffffffb3;
                transition-duration: 500ms;
                line-height: 32px;
            }

            a span {
                letter-spacing: 0;
            }

            a:hover {
                color: white;
                border-color: white;
                transition-duration: 500ms;
                font-size: 28px;
            }
		</style>
	</head>
	<body>
		<div class="container">
			<div class="content">
				<div class="title">велкоме</div>
				{{--<div class="quote">{{ Inspiring::quote() }}</div>--}}
                <div class="quote"><a href="/home">хоум<span>е</span></a></div>
			</div>
		</div>
	</body>
</html>
