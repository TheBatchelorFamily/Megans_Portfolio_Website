(function () {
    "use strict";

    angular.module("angular.store-financial")
        .factory("authService", authServiceFactory);

    authServiceFactory.$inject = ["$http", "store", "jwtHelper", "apiUrlFormatter", "STORE_KEYS", "AUTH_CLIENT_ID", "JWT_PERMISSION_KEY", "JWT_USERNAME_KEY"];

	function authServiceFactory($http, store, jwtHelper, apiUrlFormatter, STORE_KEYS, AUTH_CLIENT_ID, JWT_PERMISSION_KEY, JWT_USERNAME_KEY) {
        //service for encapsulating authentication and authorization state and related business logic

		var username;

        return {
            login: login,
            logout: logout,
            isAuthenticated: isAuthenticated,
            hasClaim: hasClaim,
            currentUsername: currentUsername
        };

        function getToken() {
        	return store.get(STORE_KEYS.JWT);
        }

        function login(username, password) {
            var params = "username=" + encodeURIComponent(username) + "&password=" + encodeURIComponent(password) + "&client_id=" + AUTH_CLIENT_ID + "&grant_type=password",
                loginPromise = $http.post("/authorization/token", params);

            loginPromise.then(function (response) {
            	store.set(STORE_KEYS.JWT, response.data.access_token);
            });

            return loginPromise;
        }

        function currentUsername() {
	        if (!username) {
        		var token = getToken();
        		if (token) {
        			username = jwtHelper.decodeToken(token)[JWT_USERNAME_KEY];
        		}
	        }
			return username;
		}

        function logout(callback) {
        	store.remove(STORE_KEYS.JWT);
        	username = undefined;

            if (angular.isFunction(callback)) {
                callback();
            }
        }

        function isAuthenticated() {
            var token = getToken();
            return token && !jwtHelper.isTokenExpired(token);
        }

        function hasClaim(claim) {
            var token = getToken();
            if (token) {
            	var claims = jwtHelper.decodeToken(token)[JWT_PERMISSION_KEY];
                return claims && angular.isArray(claims) && claims.indexOf(claim) > -1;
            }
            return false;
        }
    }
}());