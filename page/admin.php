<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Админка</title>
	<link type="image/x-icon" rel="shortcut icon" href="../assets/favicon/favicon.ico" />
	<link rel="apple-touch-icon" sizes="180x180" href="../assets/favicon/apple-touch-icon.png" />
	<link rel="icon" type="image/png" sizes="32x32" href="../assets/favicon/favicon-32x32.png" />
	<link rel="icon" type="image/png" sizes="16x16" href="../assets/favicon/favicon-16x16.png" />
	<link type="image/png" sizes="192x192" rel="icon" href="../assets/favicon/android-chrome-192x192.png" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
	<link rel="stylesheet" href="../css/style.css" />
</head>

<body data-barba="wrapper" class="">
	<div class="app">
		<div class="fade" data-barba="container" data-barba-namespace="profile" style="overflow: hidden;">
			<?php require_once __DIR__ . '/../php/components/header.php' ?>
			<div class="wrapper">
				<div class="admin">
					<div class="admin__navbar navbar">
						<div class="navbar__inner">
							<h2 class="profile__name navbar__title">Андрей</h2>
							<div class="navbar__column">
								<a href="./profile.php" class="navbar__link-1">
									<svg width="40" height="39" viewBox="0 0 40 39" fill="none" xmlns="http://www.w3.org/2000/svg" class="navbar__homeSvg">
										<path d="M39.5811 18.8521L21.01 0.415878C20.4514 -0.138626 19.5486 -0.138626 18.99 0.415878L0.418921 18.8521C-0.13964 19.4066 -0.13964 20.3029 0.418921 20.8574C0.977482 21.4119 1.88032 21.4119 2.43888 20.8574L20 3.42381L31.4484 14.789C31.4469 14.8245 31.4284 14.8557 31.4284 14.8911V36.1637H8.57163V21.982C8.57163 21.1977 7.93164 20.5638 7.14309 20.5638C6.35453 20.5638 5.71454 21.1977 5.71454 21.982V37.5818C5.71454 38.3661 6.35453 39 7.14309 39H32.8569C33.6469 39 34.2855 38.3661 34.2855 37.5818V17.6055L37.5611 20.8574C37.8397 21.1339 38.2054 21.2729 38.5711 21.2729C38.9368 21.2729 39.3025 21.1339 39.5811 20.8574C40.1396 20.3029 40.1396 19.4066 39.5811 18.8521Z" fill="var(--color-main)" />
									</svg>
								</a>
								<a href="./policies.php" class="navbar__link-1">
									<svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg" class="navbar__policiesSvg">
										<path d="M39.9998 21.6667C40.0205 17.0798 38.1647 12.6525 34.7988 9.25843C31.4328 5.8644 26.8012 3.75028 21.8181 3.33333V1.66667C21.8181 1.22464 21.6265 0.800716 21.2855 0.488155C20.9446 0.175595 20.4821 0 19.9999 0C19.5177 0 19.0552 0.175595 18.7143 0.488155C18.3733 0.800716 18.1817 1.22464 18.1817 1.66667V3.33333C13.3724 3.73068 8.88238 5.70958 5.54053 8.90469C2.19868 12.0998 0.230723 16.2953 0 20.7167C0 21.85 0 22.95 1.34545 23.2833C3.94543 23.9 3.56362 19.7833 7.83632 19.7667C8.77721 19.825 9.68553 20.1059 10.4726 20.5821C11.2597 21.0582 11.8987 21.7133 12.3272 22.4833C12.4851 22.7408 12.7147 22.9551 12.9927 23.1045C13.2706 23.2539 13.5868 23.3328 13.909 23.3333C15.8545 23.3333 15.3454 21.3167 18.1635 20.1667V35C18.1635 36.3261 18.7382 37.5979 19.7611 38.5355C20.7841 39.4732 22.1714 40 23.6181 40C25.0647 40 26.4521 39.4732 27.475 38.5355C28.4979 37.5979 29.0726 36.3261 29.0726 35C29.0726 34.558 28.881 34.134 28.54 33.8215C28.1991 33.5089 27.7366 33.3333 27.2544 33.3333C26.7722 33.3333 26.3097 33.5089 25.9688 33.8215C25.6278 34.134 25.4362 34.558 25.4362 35C25.4362 35.442 25.2447 35.866 24.9037 36.1785C24.5627 36.4911 24.1003 36.6667 23.6181 36.6667C23.1358 36.6667 22.6734 36.4911 22.3324 36.1785C21.9914 35.866 21.7999 35.442 21.7999 35V20.1833C24.5271 21.3167 24.109 23.3333 26.018 23.3333C26.3402 23.3328 26.6565 23.2539 26.9344 23.1045C27.2123 22.9551 27.442 22.7408 27.5999 22.4833C27.9782 21.6793 28.6051 20.9945 29.4032 20.5133C30.2012 20.0322 31.1355 19.7758 32.0907 19.7758C33.0459 19.7758 33.9803 20.0322 34.7783 20.5133C35.5764 20.9945 36.2033 21.6793 36.5816 22.4833C36.7749 22.8118 37.0829 23.0713 37.4561 23.2202C37.8294 23.3692 38.2464 23.399 38.6404 23.3049C39.0344 23.2107 39.3824 22.9981 39.6289 22.7011C39.8754 22.4041 40.006 22.0398 39.9998 21.6667ZM26.0544 18.8333C25.2861 18.0622 24.3509 17.4463 23.3084 17.025C22.266 16.6036 21.1392 16.386 19.9999 16.386C18.8606 16.386 17.7338 16.6036 16.6914 17.025C15.6489 17.4463 14.7137 18.0622 13.9454 18.8333C12.7591 17.6546 11.1912 16.8564 9.47265 16.5564C7.7541 16.2563 5.97585 16.4702 4.39998 17.1667C5.44041 14.116 7.5167 11.4497 10.3261 9.55661C13.1356 7.66349 16.5312 6.6425 20.0181 6.6425C23.5049 6.6425 26.9006 7.66349 29.71 9.55661C32.5195 11.4497 34.5957 14.116 35.6362 17.1667C34.0465 16.4723 32.2556 16.2643 30.5273 16.5733C28.7989 16.8824 27.2246 17.6922 26.0362 18.8833L26.0544 18.8333Z" fill="var(--color-main)" />
									</svg>
								</a>
								<a href="./admin.php" class="navbar-active">
									<svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg" class="navbar__adminSvg">
										<path d="M19.9697 10.5662C21.6413 10.5662 23.2754 11.0531 24.6652 11.9653C26.0551 12.8775 27.1384 14.1741 27.7781 15.6911C28.4177 17.2081 28.5851 18.8774 28.259 20.4878C27.9329 22.0982 27.128 23.5775 25.946 24.7385C24.764 25.8996 23.258 26.6903 21.6186 27.0106C19.9791 27.3309 18.2798 27.1665 16.7354 26.5382C15.1911 25.9098 13.8711 24.8457 12.9424 23.4805C12.0138 22.1152 11.5181 20.5101 11.5181 18.8681C11.5181 16.6663 12.4085 14.5547 13.9935 12.9978C15.5785 11.4408 17.7282 10.5662 19.9697 10.5662ZM39.7927 10.1888C39.6567 10.4203 39.4605 10.6121 39.2243 10.7447C38.9881 10.8773 38.7202 10.9459 38.4482 10.9435C38.1774 10.9457 37.9114 10.8738 37.6798 10.736L36.7962 10.2265C36.3657 10.5891 35.8708 10.8705 35.3364 11.0567V12.0756C35.3364 12.4759 35.1745 12.8599 34.8863 13.143C34.5981 13.426 34.2073 13.5851 33.7997 13.5851C33.3922 13.5851 33.0013 13.426 32.7131 13.143C32.425 12.8599 32.2631 12.4759 32.2631 12.0756V11.0567C31.7286 10.8705 31.2337 10.5891 30.8032 10.2265L29.9197 10.736C29.6881 10.8738 29.4221 10.9457 29.1513 10.9435C28.8148 10.9415 28.4882 10.8311 28.2217 10.6291C27.9553 10.4271 27.7637 10.1448 27.6765 9.82546C27.5892 9.50617 27.6111 9.16756 27.7387 8.86165C27.8663 8.55575 28.0927 8.29946 28.383 8.13217L29.2666 7.62273C29.2116 7.34938 29.1858 7.07114 29.1897 6.79253C29.1858 6.51393 29.2116 6.23568 29.2666 5.96233L28.383 5.45289C28.2059 5.35676 28.0502 5.22682 27.9249 5.07069C27.7997 4.91457 27.7076 4.73543 27.6539 4.5438C27.6002 4.35218 27.586 4.15194 27.6123 3.95487C27.6385 3.75779 27.7047 3.56787 27.8067 3.39627C28.0151 3.05061 28.3535 2.79941 28.749 2.69701C29.1444 2.59462 29.5649 2.64925 29.9197 2.84909L30.8032 3.35853C31.2337 2.99596 31.7286 2.71451 32.2631 2.52833V1.50945C32.2631 1.10912 32.425 0.725185 32.7131 0.442108C33.0013 0.159031 33.3922 0 33.7997 0C34.2073 0 34.5981 0.159031 34.8863 0.442108C35.1745 0.725185 35.3364 1.10912 35.3364 1.50945V2.52833C35.8708 2.71451 36.3657 2.99596 36.7962 3.35853L37.6798 2.84909C38.0345 2.64925 38.4551 2.59462 38.8505 2.69701C39.2459 2.79941 39.5844 3.05061 39.7927 3.39627C39.8948 3.56787 39.9609 3.75779 39.9872 3.95487C40.0134 4.15194 39.9993 4.35218 39.9456 4.5438C39.8919 4.73543 39.7997 4.91457 39.6745 5.07069C39.5493 5.22682 39.3936 5.35676 39.2165 5.45289L38.3329 5.96233C38.3879 6.23568 38.4136 6.51393 38.4097 6.79253C38.4136 7.07114 38.3879 7.34938 38.3329 7.62273L39.2165 8.13217C39.3936 8.2283 39.5493 8.35825 39.6745 8.51437C39.7997 8.67049 39.8919 8.84964 39.9456 9.04126C39.9993 9.23289 40.0134 9.43312 39.9872 9.6302C39.9609 9.82727 39.8948 10.0172 39.7927 10.1888ZM33.7997 8.30198C34.1037 8.30198 34.4008 8.21346 34.6535 8.04759C34.9062 7.88173 35.1031 7.64599 35.2194 7.37017C35.3357 7.09436 35.3662 6.79086 35.3069 6.49805C35.2476 6.20525 35.1012 5.93629 34.8863 5.72519C34.6714 5.51409 34.3976 5.37033 34.0995 5.31208C33.8014 5.25384 33.4925 5.28373 33.2117 5.39798C32.9309 5.51223 32.6909 5.7057 32.522 5.95393C32.3532 6.20215 32.2631 6.49399 32.2631 6.79253C32.2631 7.19286 32.425 7.5768 32.7131 7.85987C33.0013 8.14295 33.3922 8.30198 33.7997 8.30198ZM38.1024 16.7172C37.701 16.7645 37.3347 16.9654 37.083 17.2762C36.8314 17.587 36.7145 17.9827 36.7578 18.3776C36.8345 19.0416 36.873 19.7093 36.8731 20.3776C36.8787 24.4406 35.3607 28.3633 32.6088 31.3966C31.3649 29.6439 29.762 28.1658 27.9028 27.0569C25.7681 29.0658 22.926 30.1873 19.9697 30.1873C17.0135 30.1873 14.1714 29.0658 12.0367 27.0569C10.1775 28.1658 8.57455 29.6439 7.33066 31.3966C5.16936 29.0035 3.75786 26.0481 3.26591 22.8857C2.77396 19.7233 3.22251 16.4887 4.55762 13.5708C5.89272 10.6529 8.05754 8.17597 10.7917 6.43792C13.5259 4.69986 16.713 3.77468 19.9697 3.77363C20.4958 3.77052 21.0216 3.79571 21.5448 3.8491C21.7466 3.86645 21.9499 3.84458 22.1431 3.78474C22.3363 3.72491 22.5156 3.62829 22.6708 3.50039C22.826 3.37248 22.954 3.21581 23.0475 3.03932C23.1411 2.86282 23.1983 2.66995 23.2159 2.47173C23.2336 2.2735 23.2113 2.0738 23.1504 1.88403C23.0895 1.69426 22.9911 1.51813 22.8609 1.3657C22.7307 1.21327 22.5712 1.08752 22.3916 0.995642C22.2119 0.903761 22.0155 0.847543 21.8137 0.830198C21.2183 0.773594 20.5844 0.754726 19.9697 0.754726C15.9445 0.756098 12.0136 1.95191 8.69206 4.18546C5.37056 6.41901 2.81345 9.5861 1.35581 13.2717C-0.101821 16.9573 -0.391975 20.9895 0.523373 24.8399C1.43872 28.6902 3.51687 32.1792 6.48549 34.8495L6.7352 35.0759C10.3872 38.2486 15.0943 40 19.9697 40C24.8452 40 29.5523 38.2486 33.2043 35.0759L33.454 34.8495C35.5018 33.0138 37.1371 30.7785 38.255 28.2866C39.373 25.7946 39.9491 23.1008 39.9464 20.3776C39.9501 19.5958 39.9051 18.8144 39.8119 18.0379C39.7881 17.8409 39.725 17.6504 39.6262 17.4773C39.5274 17.3043 39.3947 17.152 39.236 17.0294C39.0772 16.9067 38.8953 16.816 38.7008 16.7624C38.5063 16.7088 38.303 16.6935 38.1024 16.7172Z" fill="var(--background)" />
									</svg>
								</a>
							</div>
						</div>
					</div>
					<div class="admin__main">
						<h1 class="admin__title">Админка</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php require_once __DIR__ . '/../php/components/footer.php' ?>

</body>

</html>