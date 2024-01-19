<style>
.countdown {
	display: flex;	
}
.time {
	display: flex;
	flex-direction: column;
	align-items: center;
	justify-content: center;
	margin: 15px;
}
.time h2 {
	font-weight: bold;
	font-size: 90px;
   	line-height: 1;
	margin: 0 0 5px;
}
@media (max-width: 500px) {
	.time {
		margin: 5px;
	}
	.time h2 {
		font-size: 60px;
	}
	.time small {
		font-size: 10px;
	}
}
</style>