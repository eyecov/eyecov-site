(function () {
  const script = document.currentScript;
  const measurementId = script && script.dataset.measurementId;
  const storageKey = 'odinn.analyticsConsent';

  if (!measurementId) {
    return;
  }

  window.dataLayer = window.dataLayer || [];
  window.gtag = window.gtag || function () {
    window.dataLayer.push(arguments);
  };

  window.gtag('consent', 'default', {
    ad_storage: 'denied',
    analytics_storage: 'denied',
    ad_user_data: 'denied',
    ad_personalization: 'denied',
  });

  function loadAnalytics() {
    if (document.querySelector('script[data-ga4-loader]')) {
      return;
    }

    const loader = document.createElement('script');
    loader.async = true;
    loader.src = 'https://www.googletagmanager.com/gtag/js?id=' + encodeURIComponent(measurementId);
    loader.dataset.ga4Loader = 'true';
    document.head.appendChild(loader);
  }

  function grantAnalytics() {
    window.localStorage.setItem(storageKey, 'granted');
    window.gtag('consent', 'update', {
      analytics_storage: 'granted',
    });
    loadAnalytics();
    window.gtag('js', new Date());
    window.gtag('config', measurementId);
  }

  function denyAnalytics() {
    window.localStorage.setItem(storageKey, 'denied');
    window.gtag('consent', 'update', {
      analytics_storage: 'denied',
    });
  }

  document.addEventListener('DOMContentLoaded', function () {
    const banner = document.querySelector('[data-analytics-consent]');
    const accept = document.querySelector('[data-analytics-accept]');
    const decline = document.querySelector('[data-analytics-decline]');
    const stored = window.localStorage.getItem(storageKey);

    if (stored === 'granted') {
      grantAnalytics();
      return;
    }

    if (stored === 'denied') {
      return;
    }

    if (!banner || !accept || !decline) {
      return;
    }

    banner.hidden = false;

    accept.addEventListener('click', function () {
      grantAnalytics();
      banner.hidden = true;
    });

    decline.addEventListener('click', function () {
      denyAnalytics();
      banner.hidden = true;
    });
  });
})();
