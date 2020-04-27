<template>
    <div class="px-4">
        <div class="row">
            <div class="registered w-32">
            </div>

            <div class="speakers w-33 mx-2">
            </div>

            <div class="days-until w-32">
            </div>
        </div>

        <div class="row">
            <div class="table-responsive table-full-width w-100 ml-0 mt-3">
                <table class="table table-hover">
                    <tr>
                        <th>Local do Evento</th>
                        <td>{{ place }}</td>
                    </tr>

                    <tr>
                        <th>Curso Relacionado</th>
                        <td>{{ course }}</td>
                    </tr>

                    <tr>
                        <th>Data de Início</th>
                        <td>{{ startDate }}</td>
                    </tr>

                    <tr>
                        <th>Duração</th>
                        <td>
                            {{ duration + (duration > 1 ? ' dias' : ' dia') }}
                        </td>
                    </tr>

                    <tr>
                        <th>Descrição</th>
                        <td>{{ description }}</td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="row">
            <a :href="scheduleRoute" class="btn btn-primary w-32 my-3">
                Programação
            </a>
            <a :href="speakersRoute" class="btn btn-info w-33 mx-2 my-3">
                Palestrantes
            </a>
        </div>

        <div class="row">
            <h4>
                Gerência de Inscritos

                <button class="btn btn-default ml-4">
                    Inscritos
                    <i class="fa fa-plus"></i>
                </button>
            </h4>
            <div class="table-responsive w-100">
                <table class="table table-hover">
                    <thead>
                        <th> Nome </th>
                        <th> Matrícula </th>
                        <th> E-mail </th>
                        <th> Present </th>
                    </thead>
                    <tbody>
                        <tr>
                            <td> Fausto Silva </td>
                            <td> 6662424 </td>
                            <td> faus@gmail.com </td>
                            <td>
                                <input type="checkbox" checked>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: {
            place: {
                type: String,
                default: ""
            },
            course: {
                type: String,
                default: ""
            },
            startDate: {
                type: String,
                default: ""
            },
            duration: {
                type: String,
                default: ""
            },
            description: {
                type: String,
                default: ""
            },
            scheduleRoute: {
                type: String,
                default: ""
            },
            speakersRoute: {
                type: String,
                default: ""
            }
        }
    }
</script>

<style>

    .registered {
        height: 23vh;
        background-color: #cce5ff;
    }

    .speakers{
        height: 23vh;
        background-color: #d4edda;
    }

    .days-until {
        height: 23vh;
        background-color: #fff3cd;
    }

    .w-33 {
        width: 33.3%
    }

    .w-32 {
        width: 32.53%;
    }

    th + td {
        text-align: right;
    }

</style>