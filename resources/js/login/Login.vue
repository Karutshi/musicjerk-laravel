<template>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Login</div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="emailInputLabel">Email address</label>
                            <input type="email" class="form-control" id="emailInput" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="passwordInputLabel">Password</label>
                            <input type="password" class="form-control" id="passwordInput" placeholder="Password">
                        </div>
                        <div class="row container">
                            <div class="col-auto mr-auto form-check">
                                <input type="checkbox" class="form-check-input" id="rememberMe">
                                <label class="form-check-label" for="rememberMe">Remember me</label>
                            </div>
                            <div class="col-auto align-self-end justify-content-end">
                                <button type="submit" class="btn btn-primary align-self-end">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
</style>

<script>
    import settings from '../data/settings'

    export default {}
</script>
