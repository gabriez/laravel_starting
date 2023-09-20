<?php

function activateRoutes($actualRoute) {
	return request()-> routeIs($actualRoute);
}