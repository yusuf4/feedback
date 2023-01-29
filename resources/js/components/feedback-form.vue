<template>
    <div class="container">
        <div class="form-container">
            <div class="form-title">
                <p>
                    Форма обратый связ

                </p>
            </div>
            <form class="form-field" method="POST" action="/create" enctype="multipart/form-data">
                    <input type="hidden" name="_token" :value="csrf">
                    <input type="text" name="name" class="form-field-name" placeholder="Имя">

                    <input type="tel" name="phone" class="form-field-phone" placeholder="Номер Телефон">

                    <textarea name="text" rows="10" cols="45" class="form-text" placeholder="Ваше сообщение"></textarea>
                    <input type="submit" value="Отправить" class="btn">
            </form>
        </div>
    </div>
</template>

<script>
export default {
    name: "feedbackForm",
    data() {
        return {
            csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        }
    }
}
</script>

<style scoped>
.form-container{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
.form-title{
    font-family: 'Nexa';
    font-style: normal;
    font-weight: 800;
    font-size: 28px;
    line-height: 26px;
    display: flex;
    align-items: center;
    text-align: center;

    color: black;
}
.form-field{
    display: flex;
    flex-direction: column;
    align-items: center;
    height: 500px;
    width: 420px;
    background: #121212;
    padding: 10px;
}
.form-field-name{
    margin-top: 70px;
    margin-bottom: 20px;
    width: 370px;
    height: 24px;
    border-radius: 10px;
    border-width: 1px;
    outline:none;
    text-indent: 10px;
    font-size: 16px;
    font-weight: 400;
}
.form-field-phone{
    margin-bottom: 30px;
    width: 370px;
    height: 24px;
    border-radius: 10px;
    border-width: 1px;
    outline:none;
    text-indent: 10px;
    font-size: 16px;
    font-weight: 400;
}
.form-text{
    margin-bottom: 30px;
}
.btn{
    align-self: end;
    margin-right: 30px;
    background: #1c7430;
    border-radius: 7px;
    font-size: 16px;
    color: white;
    border: 0 solid ;
}
</style>
