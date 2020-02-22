<template>
    <base-modal
        modalid="createEventModal"
        variant="dark"
        @create="createEvent"
    >
        <div class="form-group">
            <label for="eventName">Nome do evento</label>
            <input type="text" name="eventName" id="eventName" class="form-control">
        </div>

        <div class="form-group">
            <label for="eventPlace">Local do evento</label>
            <input type="text" name="eventPlace" id="eventPlace" class="form-control">
        </div>

        <div class="form-group">
            <label for="eventDescription">Breve descrição</label>
            <textarea name="eventDescription" id="eventDescription" class="form-control" rows="3"></textarea>
        </div>

        <div class="form-group">
            <label for="eventDateStart">Data de início do evento</label>
            <input type="date" name="eventDateStart" id="eventDateStart" class="form-control">
        </div>

        <div class="form-group">
            <label for="eventDateEnd">Data de térmimo do evento</label>
            <input type="date" name="eventDateEnd" id="eventDateEnd" class="form-control">
        </div>
    </base-modal>
</template>

<script>
export default {
    methods: {
        async createEvent() {
            let data = {
                'event_name': document.getElementById('eventName').value,
                'place': document.getElementById('eventPlace').value,
                'description': document.getElementById('eventDescription').value,
                'dateStart': document.getElementById('eventDateStart').value,
                'dateEnd': document.getElementById('eventDateEnd').value,
            }

            // await window.axios.post('/api/event', data);

            window.location.replace('/editor');
        }
    }
}
</script>

<style lang="css" scoped>
</style>
