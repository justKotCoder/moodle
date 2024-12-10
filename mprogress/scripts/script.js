document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.toggle-details').forEach(button => {
        button.addEventListener('click', () => {
            const activities = button.nextElementSibling;
            activities.style.display = activities.style.display === 'none' ? 'block' : 'none';
            button.textContent = activities.style.display === 'none' ? 'Показать задания' : 'Скрыть задания';
        });
    });
});

 //  скрипт для draggable-button
 const draggableButton = document.createElement('button');
 draggableButton.classList.add('draggable-button');
 draggableButton.textContent = 'Mprogress';
 document.body.appendChild(draggableButton);

 let isDragging = false;
 draggableButton.addEventListener('mousedown', function(e) {
     isDragging = true;
     let offsetX = e.clientX - parseInt(window.getComputedStyle(this).left);
     let offsetY = e.clientY - parseInt(window.getComputedStyle(this).top);

     const onMouseMove = (e) => {
         if (isDragging) {
             draggableButton.style.left = (e.clientX - offsetX) + 'px';
             draggableButton.style.top = (e.clientY - offsetY) + 'px';
         }
     };

     document.addEventListener('mousemove', onMouseMove);
     document.addEventListener('mouseup', () => {
         isDragging = false;
         document.removeEventListener('mousemove', onMouseMove);
     }, { once: true });
 });
 
 
 
        const progressBar = document.getElementById('progress-bar');
        const progressPercentage = document.getElementById('progress-percentage');
        const coursePerformance = document.getElementById('course-performance');
        const progressCircle = document.getElementById('progress-circle');
        const toggleButton = document.querySelector('.toggle-details');
        const activitiesTable = document.querySelector('.course-activities');

        // Обновление цвета круга на основе прогресса
        function updateProgress() {
            const value = progressBar.value; // Текущее значение прогресса
            const max = progressBar.max;    // Максимальное значение
            const percentage = (value / max) * 100;

            // Обновляем текст
            progressPercentage.textContent = `(${percentage.toFixed(2)}%)`;
            coursePerformance.textContent = `Успеваемость: ${percentage.toFixed(2)}%`;

            // Меняем цвет круга
            const red = Math.max(255 - Math.round((percentage / 100) * 255), 0);
            const green = Math.min(Math.round((percentage / 100) * 255), 255);
            progressCircle.style.backgroundColor = `rgb(${red}, ${green}, 0)`;
        }

        // Переключение видимости таблицы
        toggleButton.addEventListener('click', () => {
            if (activitiesTable.style.display === 'none') {
                activitiesTable.style.display = 'table';
                toggleButton.textContent = '▲';
            } else {
                activitiesTable.style.display = 'none';
                toggleButton.textContent = '▼';
            }
        });

        // Первоначальное обновление
        updateProgress();
