import Vue from 'vue';
import Router from 'vue-router';

import NotFoundComponent    from "./components/NotFoundComponent";
import LandingComponent     from "./components/LandingComponent";
import GachaHomeComponent   from "./components/GachaHomeComponent";
import TaskListComponent    from "./components/Task/TaskListComponent";
import TaskShowComponent    from "./components/Task/TaskShowComponent";
import TaskCreateComponent  from "./components/Task/TaskCreateComponent";
import TaskEditComponent    from "./components/Task/TaskEditComponent";

Vue.use(Router);

const router = new Router ({
    mode: 'history',
    routes: [
        {
            path: '/home',
            name: 'home',
            component: LandingComponent
        },
        {
            path: '/tasks',
            name: 'task.list',
            component: TaskListComponent
        },
        {
            path:   '/tasks/create',
            name:   'task.create',
            component:  TaskCreateComponent
        },
        {
            path:   '/tasks/:taskId',
            name:   'task.show',
            component:  TaskShowComponent,
            props:  true
        },
        {
            path:   '/tasks/:taskId/edit',
            name:   'task.edit',
            component:  TaskEditComponent,
            props: true
        },
        {
            path:   '/rolls',
            name:   'rolls.info',
            component: GachaHomeComponent
        },
    ]
});


export default router;