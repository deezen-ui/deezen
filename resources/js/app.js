if (import.meta.hot) {
    import.meta.hot.accept(() => {
        console.log("Module updated! Reloading...");
    });
}

import './deezen';
