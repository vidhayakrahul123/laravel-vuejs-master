import {createRouter,createWebHistory} from 'vue-router';

import AddStudent     from './components/addStudent.vue';
import ViewAllStudent from './components/viewAllStudents.vue';

    const routes = [
    {
        path     : '/add-student',
        component: AddStudent,
        name     : "add-student"
    },
    {
        path     : '/edit-student/:Id',
        component: AddStudent,
        name     : "edit-student"
    },
    {
        path     : '/view-student',
        component: ViewAllStudent,
        name     : "view-student"
    }
];

export default createRouter({
    history: createWebHistory(),
    routes
});