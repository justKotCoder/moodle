const courses = [
    {
        name: 'Название курса 1',
        progress: 25,
        tasks: [
            { title: 'Тест 1', score: '9/10', progress: 90 },
            { title: 'Тест 2', score: '9/12', progress: 75 },
            { title: 'Задание 1', score: '48/96', progress: 50 },
            { title: 'Лабораторная работа', score: '15/50', progress: 30 },
            { title: 'Итоговый тест', score: '8/80', progress: 10 },
        ]
    },
    // Добавьте другие курсы здесь
];

function renderCourses(courses) {
    const container = document.getElementById('courses-container');
    container.innerHTML = '';

    courses.forEach(course => {
        const courseCard = document.createElement('div');
        courseCard.className = 'course-card';

        const courseHeader = document.createElement('div');
        courseHeader.className = 'course-header';
        const courseTitle = document.createElement('h2');
        courseTitle.textContent = course.name || 'Название курса';

        const courseProgressCircle = document.createElement('div');
        courseProgressCircle.className = 'course-progress-circle';
        const progressText = document.createElement('span');
        progressText.textContent = `${course.progress}%`;
        const circle = document.createElement('div');
        circle.className = 'circle';
        circle.style.background = `conic-gradient(orange ${course.progress}%, #eee ${course.progress}%)`;

        courseProgressCircle.appendChild(progressText);
        courseProgressCircle.appendChild(circle);
        courseHeader.appendChild(courseTitle);
        courseHeader.appendChild(courseProgressCircle);

        const arrow = document.createElement('div');
        arrow.className = 'arrow';
        arrow.textContent = '▼';
        arrow.onclick = () => {
            tasksContainer.style.display = tasksContainer.style.display === 'none' ? 'block' : 'none';
        };
        courseHeader.appendChild(arrow);

        const courseProgress = document.createElement('div');
        courseProgress.className = 'course-progress';
        const progressBar = document.createElement('div');
        progressBar.className = 'progress-bar';
        const progress = document.createElement('div');
        progress.className = 'progress';
        progress.style.width = `${course.progress}%`;
        const progressLabel = document.createElement('span');
        progressLabel.className = 'progress-label';
        progressLabel.textContent = `${course.progress}%`;

        progressBar.appendChild(progress);
        courseProgress.appendChild(progressBar);
        courseProgress.appendChild(progressLabel);

        const tasksContainer = document.createElement('div');
        tasksContainer.className = 'tasks-container';

        course.tasks.forEach(task => {
            const taskDiv = document.createElement('div');
            taskDiv.className = 'task';

            const taskTitle = document.createElement('div');
            taskTitle.className = 'task-title';
            taskTitle.textContent = task.title;

            const taskProgress = document.createElement('div');
            taskProgress.className = 'task-progress';
            const taskProgressBar = document.createElement('div');
            taskProgressBar.className = 'progress-bar';
            const taskProgressInner = document.createElement('div');
            taskProgressInner.className = 'progress';
            taskProgressInner.style.width = `${task.progress}%`;
            const taskProgressLabel = document.createElement('span');
            taskProgressLabel.className = 'progress-label';
            taskProgressLabel.textContent = `${task.progress}%`;

            taskProgressBar.appendChild(taskProgressInner);
            taskProgress.appendChild(taskProgressBar);
            taskProgress.appendChild(taskProgressLabel);

            const taskScore = document.createElement('div');
            taskScore.className = 'task-score';
            taskScore.textContent = task.score;

            taskDiv.appendChild(taskTitle);
            taskDiv.appendChild(taskProgress);
            taskDiv.appendChild(taskScore);

            tasksContainer.appendChild(taskDiv);
        });

        courseCard.appendChild(courseHeader);
        courseCard.appendChild(courseProgress);
        courseCard.appendChild(tasksContainer);

        container.appendChild(courseCard);
    });
}

document.addEventListener('DOMContentLoaded', () => {
    renderCourses(courses);
});
